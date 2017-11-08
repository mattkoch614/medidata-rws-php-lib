<?php 

/**
*  @author Matthew Koch
*/
class RwsConnectionTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Check if RwsConnection has any syntax errors.
  */
  public function testIsThereAnySyntaxError(){
	$var = new \Medidata\RwsPhp\Core\RwsConnection('innovate');
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
}