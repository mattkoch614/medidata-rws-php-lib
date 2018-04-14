<?php namespace Medidata\RwsPhp\Tests\Unit;

use GuzzleHttp\Psr7\Response;
use Medidata\RwsPhp\Core\Requests\StudyVersionsRequest;
use Medidata\RwsPhp\Core\Responses\RwsPostResponse;
use PHPUnit\Framework\TestCase;
use Sabre\Xml\Service;
use SimpleXMLElement;

class StudyVersionsRequestTest extends TestCase
{
    /** @test */
    public function it_can_properly_construct_the_uri()
    {
        $request = new StudyVersionsRequest("FakeItTillYaMakeIt(Dev)");
        $this->assertEquals("metadata/studies/FakeItTillYaMakeIt(Dev)/versions", $request->UrlPath());
    }
}