<?php namespace Medidata\RwsPhp\Core;

use GuzzleHttp\Client;
use Medidata\RwsPhp\Core\Requests\RwsRequest;
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

    /**
     * RwsConnection constructor.
     */
    private function __construct() {}

    /**
     * Create a new instance of the RwsConnection class with a domain only (no authentication)
     *
     * @param $domain
     * @param string $virtual_dir
     * @return static
     */
    public static function withDomain($domain, $virtual_dir = 'RaveWebServices')
    {
        $connection = new static;
        $connection->domain = s($domain)->startsWith('http') ? $domain : "https://{$domain}.mdsol.com";
        $connection->base_url = "{$domain}/{$virtual_dir}";
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
     * @return mixed
     */
    public function sendRequest(RwsRequest $request, $timeout = null)
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->base_url,
            // You can set any number of default request options.
            'timeout'  => $timeout,
        ]);

        //TODO: Send request and deal with the response;
        
    }

    /**
     * Return the result of the last request that was made.
     * @return mixed
     */
    public function getLastResult()
    {
        // TODO: Implement getLastResult() method.
    }
}