<?php namespace Medidata\RwsPhp\Core\Responses;

use GuzzleHttp\Psr7\Response;

class RwsResponse extends RWSXMLResponse
{
    protected $responseObject;

    /**
     * RwsResponse constructor.
     * @param Response $responseObject
     */
    public function __construct(Response $responseObject)
    {
        $this->responseObject = $responseObject;
        parent::__construct($responseObject->getBody()->getContents());
    }

}