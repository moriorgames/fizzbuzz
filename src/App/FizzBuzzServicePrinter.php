<?php

namespace App;

class FizzBuzzServicePrinter
{
    public function print(): void
    {
        $calculator = new FizzBuzzCalculator;

        for ($number = 0; $number < 100; $number++) {
            echo $calculator->getResultForNumber($number) . PHP_EOL;
        }
    }
}
