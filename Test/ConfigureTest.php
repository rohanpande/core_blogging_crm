<?php
require_once('../Core/Configure.php');

class ConfigureTest extends PHPUnit_Framework_TestCase {

  public function testConfig()
  {
      $config = new Configure();
      $class  = get_class($config);
      $this->assertTrue(($class == 'Configure'));
      $this->assertTrue(is_object($config));
  }

  public function testStaticAttributes()
  {
    $this->assertClassHasStaticAttribute('config', 'Configure');
    $this->assertClassHasStaticAttribute('extension','Configure');
  }

  public function testConfigEmpty()
  {
    $configure = new Configure();
    $this->assertInternalType('array',$configure::$config);
    $this->assertCount(0,$configure::$config);
  }

  public function testConfigNotEmpty()
  {
    $configure = new Configure();
    $configure::write('age', 30);
    $this->assertCount(1,$configure::$config);
    $this->assertEquals(30,$configure::read('age'));
  }

}
