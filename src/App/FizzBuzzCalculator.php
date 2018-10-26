<?php

namespace App;

class FizzBuzzCalculator
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function getResultForNumber(int $number): string
    {
        $output = (string)$number;
        if ($number % 3 === 0 && $number % 5 === 0) {
            $output = self::FIZZ . self::BUZZ;
        } else if ($number % 3 === 0) {
            $output = self::FIZZ;
        } else if ($number % 5 === 0) {
            $output = self::BUZZ;
        }

        return $output;
    }
}
