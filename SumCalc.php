<?php

/**
 * Exercise 4
 */

class SumCalc
{
    public function __construct()
    {
    }

    public function countSum($number)
    {
        if ($number == 0) {
            return 0;
        }
        return ($number % 9 == 0) ? 9 : ($number % 9);
    }
}
$instance = new SumCalc();

$number = 4;

echo $instance->countSum($number);
