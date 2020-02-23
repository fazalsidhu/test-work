<?php
require 'RepeatingLetters.php';
 
class RepeatingLettersTests extends PHPUnit_Framework_TestCase
{ 
    protected function setUp()
    {
        $this->instance = new RepeatingLetters();
    }
 
    protected function tearDown()
    {
        $this->instance = null;
    }
 
    public function testNotContainsRepeatCharacter()
    {
        $result = $this->instance->notContainsRepeatCharacter('Euclidean');
        $this->assertEquals(false, $result);

        $result = $this->instance->notContainsRepeatCharacter('documentarily');
        $this->assertEquals(true, $result);
        
    }
}
