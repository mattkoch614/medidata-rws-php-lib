<?php namespace Medidata\RwsPhp\Core\Requests;

use Medidata\RwsPhp\Core\Responses\RwsPostResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * @property string httpMethod
 * @property bool requiresAuthentication
 */
abstract class RwsPostRequest extends RwsRequest
{

    /**
     * RwsPostRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->httpMethod = 'POST';
        $this->requiresAuthentication = false;
    }

    /**
     * Default result for POST requests
     * @param ResponseInterface $response
     * @return RwsPostResponse|mixed
     */
    public function Result(ResponseInterface $response)
    {
        return new RwsPostResponse($response);
    }
}