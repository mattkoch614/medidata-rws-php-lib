<?php namespace Medidata\RwsPhp\Core\Responses;

use Sabre\Xml\Service;

abstract class RWSXMLResponse implements RwsResponseInterface
{
    protected $xmlString;
    protected $xmlArray;

    /**
     * Named constructor, instantiate from an XML string.
     * @param $xmlString
     * @return static
     */
    public static function fromXmlString($xmlString)
    {
        $response = new static;
        $response->xmlString = $xmlString;

        $service = new Service();
        $response->xmlArray = $service->parse($xmlString);
        return $response;
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