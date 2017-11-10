<?php namespace Medidata\RwsPhp\Tests\Unit;

use GuzzleHttp\Psr7\Response;
use Medidata\RwsPhp\Core\Responses\RwsPostResponse;
use PHPUnit_Framework_TestCase;

class RwsPostResponseTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_correctly_parse_a_post_response()
    {

        $responseObject = new Response(200, ['X-Foo' => 'Bar'], $this->response1);
        $response = new RwsPostResponse($responseObject);
    }

    private $response1 = '<Response ReferenceNumber="82e942b0-48e8-4cf4-b299-51e2b6a89a1b"
                    InboundODMFileOID=""
                    IsTransactionSuccessful=1"
                    SuccessStatistics="Rave objects touched: Subjects=0; Folders=0; Forms=0; Fields=0; LogLines=0" NewRecords=""
                    SubjectNumberInStudy="999" SubjectNumberInStudySite="23">
             </Response>';
}