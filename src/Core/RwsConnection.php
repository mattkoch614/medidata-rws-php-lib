<?php namespace Medidata\RwsPhp\Core;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Psr7\Request;
use Medidata\RwsPhp\Core\Exceptions\RwsException;
use Medidata\RwsPhp\Core\Requests\RwsRequest;
use Medidata\RwsPhp\Core\Responses\RwsError;
use function Stringy\create as s;

/**
 *  This class provides methods to establish a connection to RWS and send requests.
 *  @author Matthew Koch
 */
class RwsConnection implements RwsConnectionInterface {

    protected $domain;
    protected $request_time;
    protected $base_url;
    protected $auth = 'none';
    protected $username, $password;
    protected $client;
    protected $request;
    protected $last_result;

    /**
     * RwsConnection constructor.
     */
    private function __construct() {}

    /**
     * Create a new instance of the RwsConnection class with a domain only (no authentication)
     *
     * @param string $domain
     * @param string $virtual_dir
     * @return static
     */
    public static function withDomain($domain, $virtual_dir = 'RaveWebServices')
    {
        $connection = new static;
        $connection->domain = s($domain)->startsWith('http') ? $domain : "https://{$domain}.mdsol.com";
        $connection->base_url = "{$connection->domain}/{$virtual_dir}";
        $connection->request_time = 0;
        return $connection;
    }


    /**
     * Create a new instance of the RwsConnection class with a username and password.
     * @param $domain
     * @param $username
     * @param $password
     * @param string $virtual_dir
     * @return static
     */
    public static function withBasicAuthentication($domain, $username, $password, $virtual_dir = 'RaveWebServices')
    {
        $connection = self::withDomain($domain, $virtual_dir);
        $connection->auth = 'basic';
        $connection->username = $username;
        $connection->password = $password;
        return $connection;
    }


    /**
     * Send an HTTP request.
     *
     * @param RwsRequest $request
     * @param null $timeout
     * @return void
     * @throws RwsException
     */
    public function sendRequest(RwsRequest $request, $timeout = null)
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->base_url,
            // You can set any number of default request options.
            'timeout'  => $timeout,
        ]);

        $this->request = new Request($request->getHttpMethod(), $request->uri);

        if ($request->requiresAuthentication)
        {
            $credentials = base64_encode("{$this->username}:{$this->password}");
            $this->request->withHeader('Authorization', 'Basic ' . $credentials);
        }

        if ($request->getHttpMethod() == 'POST')
        {
            $this->request->withAddedHeader('Content-Type', 'text/xml');
        }

        $start_time = Carbon::now();

        try {
            $this->last_result = $this->client->send($this->request);
        } catch (ClientException $e) {

            $response = $e->getResponse();
            $this->last_result = $response;
            $content = $response->getBody()->getContents();

            //400 level errors
            if (s($content)->startsWith("<Response"))
            {
                throw new RwsException($content);
            }
            else if (s($content)->contains("<html"))
            {
                throw new RWSException("IIS Error: {$content}");
            }
            else if (s($content)->contains("<h2>HTTP Error 401.0 - Unauthorized</h2>"))
            {
                throw new RWSException("Unauthorized: {$content}");
            }
            else
            {
                throw RWSException::withRwsException($content, new RwsError($content));
            }

        } catch (ServerException $e) {

            throw new RWSException("Server Error (500) - {$e->getResponse()->getBody()->getContents()}");

        } catch (TransferException $e) {

            throw new RwsException("Unspecified Error. {$e->getMessage()}");
        }

    }

    /**
     * Return the result of the last request that was made.
     * @return mixed
     */
    public function getLastResult()
    {
        return $this->last_result;
    }

    /**
     * Get the base URL for the connection
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }
}