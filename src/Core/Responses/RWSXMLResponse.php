<?php namespace Medidata\RwsPhp\Core\Responses;

use Sabre\Xml\Service;

/**
 * @property Service $serializer
 * @property string $xmlString
 */
abstract class RWSXMLResponse implements RwsResponseInterface
{
    protected $xmlString;
    protected $serializer;

    /**
     * RWSXMLResponse constructor.
     * @param $xmlString
     */
    public function __construct($xmlString)
    {
        $this->xmlString = $xmlString;
        $this->serializer = new Service();
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
     * Get the current serializer for the XML response.
     * @return mixed
     */
    public function getSerializer()
    {
        return $this->serializer;
    }
}