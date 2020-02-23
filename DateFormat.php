<?php

/**
 * Exercise 1
 */

class DateFormat
{
    /* Node constructor */
    public function __construct()
    {
    }
    private $supported_description = ['first', 'second', 'third', 'fourth', 'fifth', 'last'];

    public function convertToDate($string)
    {
        $chunk = explode(" ", $string);

        if ((strtolower($chunk[0]) != 'the') || (!in_array($chunk[1], $this->supported_description))) {
            return 'Invalid string provided.';
        }

        $string = substr($string, 4);
        return date('Y-m-d', strtotime($string));
    }
}
$instance = new DateFormat();
$string = 'The last Wednesday of October 2019';

echo $instance->convertToDate($string);
