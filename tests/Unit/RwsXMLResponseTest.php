<?php namespace Medidata\RwsPhp\Tests\Unit;

use Medidata\RwsPhp\Core\Exceptions\RwsException;
use Medidata\RwsPhp\Core\Requests\TwoHundredRequest;
use Medidata\RwsPhp\Core\RwsConnection;
use Medidata\RwsPhp\Tests\Feature\Fakes\FakeRwsGetRequest;
use Medidata\RwsPhp\Tests\Unit\Fakes\FakeResponse;
use PHPUnit_Framework_TestCase;

/**
 *  @author Matthew Koch
 */
class RwsXMLResponseTest extends PHPUnit_Framework_TestCase{

    /** @test */
    public function it_can_parse_an_XML_string()
    {
        FakeResponse::fromXmlString($this->odmXML);
        //no assertions, no exceptions mean we succeeded!
    }

    private $odmXML = "<xml><ODM><ClinicalData></ClinicalData></ODM></xml>";
}