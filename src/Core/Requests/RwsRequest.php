<?php namespace Medidata\RwsPhp\Core\Requests;

use Psr\Http\Message\ResponseInterface;

abstract class RwsRequest implements RwsRequestInterface
{
    public $verb;
    public $requiresAuthentication;
    public $uri;
    protected $httpMethod;
    protected $requestObject;


    public function __construct()
    {
    }

    /**
     * The URL path of the request being made.
     * @return mixed
     */
    public abstract function UrlPath();


    /**
     * The RWS Result of the request
     * @param ResponseInterface $response
     * @return mixed
     */
    public abstract function Result(ResponseInterface $response);

    /**
     * Get the underlying request object.
     *
     * @return mixed
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

}