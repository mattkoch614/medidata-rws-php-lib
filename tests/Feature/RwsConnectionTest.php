<?php namespace Medidata\RwsPhp\Tests\Feature;

use Medidata\RwsPhp\Core\RwsConnection;
use Medidata\RwsPhp\Tests\Feature\Fakes\FakeRwsGetRequest;
use Mockery;
use PHPUnit_Framework_TestCase;

/**
*  @author Matthew Koch
*/
class RwsConnectionTest extends PHPUnit_Framework_TestCase{

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
      $connection = RwsConnection::withDomain('innovate');

      $connection->sendRequest(new FakeRwsGetRequest());

      //TODO: Assert connection can get last result

  }


}