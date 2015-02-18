<?php

use App\BuracoLetras;

class BuracoLetrasTest extends PHPUnit_Framework_TestCase
{

  public function setUp()
  {
    $this->buraco = new BuracoLetras;
  }

  public function testCountABC($str = 'ABC')
  {
    $this->assertEquals($this->buraco->count($str), 3);
  }

  public function testCountABCD($str = 'ABCD')
  {
    $this->assertEquals($this->buraco->count($str), 4);
  }

  public function testCountEfgMinusculo($str = 'efg')
  {
    $this->assertEquals($this->buraco->count($str), 0);
  }

}