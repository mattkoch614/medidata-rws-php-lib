<?php namespace Medidata\RwsPhp\Core\Responses;

class RwsTextResponse
{
    protected $responseText;

    /**
     * RwsTextResponse constructor.
     * @param $responseText
     */
    public function __construct($responseText)
    {
        $this->responseText = $responseText;
    }

    /**
     * Return the response text.
     *
     * @return mixed
     */
    public function getResponseText()
    {
        return $this->responseText;
    }
}