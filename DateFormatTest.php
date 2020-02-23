<?php
require 'DateFormat.php';
 
class DateFormatTest extends PHPUnit_Framework_TestCase
{ 
    protected function setUp()
    {
        $this->instance = new DateFormat();
    }
 
    protected function tearDown()
    {
        $this->instance = null;
    }
 
    public function testConvertToDate()
    {
        $result = $this->instance->convertToDate('The first Monday of October 2019');
        $this->assertEquals('2019-10-07', $result);

        $result = $this->instance->convertToDate('The third Tuesday of October 2019');
        $this->assertEquals('2019-10-15', $result);

        $result = $this->instance->convertToDate('The last Wednesday of October 2019');
        $this->assertEquals('2019-10-30', $result);

        $result = $this->instance->convertToDate('Third Tuesday of October 2019');
        $this->assertEquals('Invalid string provided.', $result);
        
    }
}
