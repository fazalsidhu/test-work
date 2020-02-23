<?php
require 'CombineStrings.php';
 
class CombineStringsTest extends PHPUnit_Framework_TestCase
{ 
    protected function setUp()
    {
        $this->instance = new CombineStrings();
    }
 
    protected function tearDown()
    {
        $this->instance = null;
    }
 
    public function testMergeStrings()
    {
        $result = $this->instance->mergeStrings('MICHAEL', 'JORDAN');
        $this->assertEquals('MJIOCRHDAAENL', $result);

    }
}
