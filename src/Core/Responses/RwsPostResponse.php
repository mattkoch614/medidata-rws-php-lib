<?php namespace Medidata\RwsPhp\Core\Responses;

use GuzzleHttp\Psr7\Response;

class RwsPostResponse extends RwsResponse
{
    public $SubjectNumberInStudy;
    public $SubjectNumberInStudySite;

    public function __construct(Response $response)
    {
        parent::__construct($response);

        dd($this->xmlArray);

        $this->SubjectNumberInStudy = $this->xmlArray[0]->Test;
    }

}