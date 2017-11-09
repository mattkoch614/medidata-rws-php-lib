<?php namespace Medidata\RwsPhp\Core\Requests;

use Medidata\RwsPhp\Core\Responses\RwsTextResponse;
use Psr\Http\Message\ResponseInterface;
use function Stringy\create as s;

class TwoHundredRequest extends RwsGetRequest
{

    /**
     * The URL path of the request being made.
     * @return mixed
     */
    public function UrlPath()
    {
        return RequestHelpers::makeUrl('/', ['twohundred']);
    }

    /**
     * The result.
     *
     * @param ResponseInterface $response
     * @return RwsTextResponse
     */
    public function Result(ResponseInterface $response)
    {
        return new RwsTextResponse($response->getBody()->getContents());
    }
}