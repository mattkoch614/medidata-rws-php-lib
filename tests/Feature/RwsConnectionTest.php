<?php namespace Medidata\RwsPhp\Tests\Feature;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Medidata\RwsPhp\Core\Exceptions\RwsException;
use Medidata\RwsPhp\Core\RwsConnection;
use Medidata\RwsPhp\Tests\Feature\Fakes\FakeRwsGetRequest;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
*  @author Matthew Koch
*/
class RwsConnectionTest extends TestCase
{
    private $mockClient;
    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-foo' => 'Bar'])
        ]);
        $handler = HandlerStack::create($mock);
        $this->mockClient = new Client(['handler' => $handler]);
    }

    /**
     * Check if RwsConnection has any syntax errors.
    */
    public function testIsThereAnySyntaxError()
    {
        $var = RwsConnection::withDomain('innovate');
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /** @test */
    public function it_can_retrieve_the_last_result()
    {
        $connection = RwsConnection::withDomain('fake-url', 'Test', $this->mockClient);
        $connection->sendRequest(new FakeRwsGetRequest(), 5);
        $this->assertNotNull($connection->getLastResult());
    }


}