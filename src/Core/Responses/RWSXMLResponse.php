<?php namespace Medidata\RwsPhp\Core\Responses;

use http\Env\Response;
use Sabre\Xml\Service;

abstract class RWSXMLResponse implements RwsResponseInterface
{
    protected $xmlString;
    protected $xmlArray;


    /**
     * RWSXMLResponse constructor.
     * @param $xmlString
     */
    public function __construct($xmlString)
    {
        $this->xmlString = $xmlString;
        $service = new Service();
        $this->xmlArray = $service->parse($xmlString);
    }

    /**
     * The XML string representation of the response.
     *
     * @return mixed
     */
    public function getXmlString()
    {
        return $this->xmlString;
    }

    /**
     * The array of key value pairs the that represent the XML object.
     * @return mixed
     */
    public function getXmlArray()
    {
        return $this->xmlArray;
    }
}