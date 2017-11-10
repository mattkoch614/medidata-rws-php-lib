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
    
    private $response1 = '<?xml version="1.0" encoding="utf-8" ?>
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