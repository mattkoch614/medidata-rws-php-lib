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
        $response = FakeResponse::fromXmlString($this->odmXML);
        //no assertions, no exceptions mean we succeeded!
    }

    private $odmXML = '<?xml version="1.0" encoding="utf-8" ?>
                            <ODM FileType="Snapshot" ODMVersion="1.3" xmlns:mdsol="http://mdsol.com/ns/odm/metadata">
                                <ClinicalData StudyOID="MediFlex(Dev)">
                                    <SubjectData SubjectKey="MJK">
                                        <SiteRef LocationOID="1" />
                                         <StudyEventData StudyEventOID="LAB" StudyEventRepeatKey="1">
                                            <FormData FormOID="TEST" FormRepeatKey="1">
                                                <ItemGroupData ItemGroupOID="TEST_LOG_LINE">
                                                    <ItemData ItemOID="TEST.INIT" Value="Test"></ItemData>
                                                </ItemGroupData>
                                            </FormData>
                                        </StudyEventData>
                                    </SubjectData>
                                </ClinicalData>
                            </ODM>';
}