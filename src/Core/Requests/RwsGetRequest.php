<?php namespace Medidata\RwsPhp\Core\Requests;

use Medidata\RwsPhp\Core\Responses\RwsResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * A basic GET request.
 *
 * @property bool requiresAuthentication
 * @property string httpMethod
 */
abstract class RwsGetRequest extends RwsRequest
{

    /**
     * RwsGetRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->httpMethod = 'GET';
        $this->requiresAuthentication = false;
    }

    /**
     * Default result for GET requests
     * @param ResponseInterface $response
     * @return RwsResponse|mixed
     */
    public function Result(ResponseInterface $response)
    {
        return new RwsResponse($response);
    }


}