<?php namespace Medidata\RwsPhp\Core\Responses;

class RwsError
{
    /**
     * @var string
     */
    private $xmlString;

    /**
     * RwsError constructor.
     * @param $xmlErrorString
     */
    public function __construct($xmlErrorString)
    {
        $this->xmlString = $xmlErrorString;
    }

}