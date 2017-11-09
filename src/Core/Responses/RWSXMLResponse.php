<?php namespace Medidata\RwsPhp\Core\Responses;

use Sabre\Xml\Reader;

abstract class RWSXMLResponse implements RwsResponseInterface
{
    protected $xmlString;
    protected $xmlRootNode;

    /**
     * Named constructor, instantiate from an XML string.
     * @param $xmlString
     * @return static
     */
    public static function fromXmlString($xmlString)
    {
        $response = new static;
        $response->xmlString = $xmlString;

        $reader = new Reader();
        $reader->xml($xmlString);
        $response->xmlRootNode = $reader->parse();

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
     * The XML root node of the response.
     * @return mixed
     */
    public function getXmlRootNode()
    {
        return $this->xmlRootNode;
    }
}