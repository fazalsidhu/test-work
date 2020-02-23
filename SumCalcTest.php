<?php
require 'SumCalc.php';
 
class SumCalcTest extends PHPUnit_Framework_TestCase
{ 
    protected function setUp()
    {
        $this->instance = new SumCalc();
    }
 
    protected function tearDown()
    {
        $this->instance = null;
    }
 
    public function testCountSum()
    {
        $result = $this->instance->countSum(258);
        $this->assertEquals(6, $result);

    }
}
