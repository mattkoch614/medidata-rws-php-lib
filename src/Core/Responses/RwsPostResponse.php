<?php namespace Medidata\RwsPhp\Core\Responses;

use GuzzleHttp\Psr7\Response;
use SimpleXMLElement;

class RwsPostResponse extends RwsResponse
{
    public $SubjectNumberInStudy;
    public $SubjectNumberInStudySite;

    public function __construct(Response $response)
    {
        parent::__construct($response);
        $xmlElement = new SimpleXMLElement($this->xmlString);
        $attr = $xmlElement->attributes();

        $this->SubjectNumberInStudy = isset($attr['SubjectNumberInStudy']) ? (string)$attr->SubjectNumberInStudy : null;
        $this->SubjectNumberInStudySite = isset($attr['SubjectNumberInStudySite']) ? (string)$attr->SubjectNumberInStudySite : null;
    }


}