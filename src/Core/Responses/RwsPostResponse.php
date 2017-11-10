<?php namespace Medidata\RwsPhp\Core\Responses;

use GuzzleHttp\Psr7\Response;

class RwsPostResponse extends RwsResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response);
    }

}