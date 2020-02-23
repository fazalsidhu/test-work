<?php
 
/**
* Exercise 1
*/
 
class RepeatingLetters
{
    /* Node constructor */
    public function __construct()
    {
    }
 
    public function notContainsRepeatCharacter($string)
    {
        $string = strtolower($string);
        // can be done with regExp

        // But doing it with Brute-force
        
        // If at any time we encounter 2
        // same characters, return false
        for ($i = 0; $i < strlen($string); $i++) {
            for ($j = $i + 1; $j < strlen($string); $j++) {
                if ($string[$i] == $string[$j]) {
                    return false;
                }
            }
        }
        // If no duplicate characters
        // encountered, return true
        return true;        
    }
}
$instance = new RepeatingLetters();
$string = 'Euclidean';
if($instance->notContainsRepeatCharacter($string)){
    echo "Word does not have any repeating letter.";
}else{
    echo "Word has a repeating letter.";
}
