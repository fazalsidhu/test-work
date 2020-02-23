<?php
 
/**
* Exercise 3
*/
 
class CombineStrings
{
    /* Node constructor */
    public function __construct()
    {
    }
 
    public function mergeStrings($string1, $string2)
    {
       
        $string1_array = str_split($string1);
        $string2_array = str_split($string2);
        
        $max_length = max(array(strlen($string1), strlen($string2)));
        
        $result = '';
        
        for($i = 0; $i < $max_length; $i++){
            if (array_key_exists($i, $string1_array)){
                $result .= $string1_array[$i];
            }
        
            if (array_key_exists($i, $string2_array)){
                $result .= $string2_array[$i];
            }
        }
        return $result;        
    }
}
$instance = new CombineStrings();

echo $instance->mergeStrings('MICHAEL', 'JORDAN');
