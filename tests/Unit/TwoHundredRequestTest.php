<?php namespace Medidata\RwsPhp\Tests\Unit;

use Medidata\RwsPhp\Core\Exceptions\RwsException;
use Medidata\RwsPhp\Core\Requests\TwoHundredRequest;
use Medidata\RwsPhp\Core\RwsConnection;
use Medidata\RwsPhp\Tests\Feature\Fakes\FakeRwsGetRequest;
use PHPUnit\Framework\TestCase;

/**
 *  @author Matthew Koch
 */
class TwoHundredRequestTest extends TestCase {

    /** @test */
    public function it_properly_configures_the_request_url()
    {
        $request = new TwoHundredRequest();
        $this->assertContains('twohundred', $request->UrlPath());
    }

}