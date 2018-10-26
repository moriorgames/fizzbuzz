<?php

use App\FizzBuzzCalculator;
use PHPUnit\Framework\TestCase;

class FizzBuzzCalculatorTest extends TestCase
{
    /**
     * @param int    $number
     * @param string $expected
     *
     * @dataProvider fizzBuzzSpecs
     */
    public function test_fizz_buzz_algorithm(int $number, string $expected)
    {
        $calculator = new FizzBuzzCalculator;

        $result = $calculator->getResultForNumber($number);

        $this->assertEquals($expected, $result);
    }

    public function fizzBuzzSpecs()
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, 'Fizz'],
            [4, '4'],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [7, '7'],
            [8, '8'],
            [9, 'Fizz'],
            [10, 'Buzz'],
            [11, '11'],
            [12, 'Fizz'],
            [13, '13'],
            [14, '14'],
            [15, 'FizzBuzz'],
            [16, '16'],
            [17, '17'],
            [18, 'Fizz'],
            [19, '19'],
            [20, 'Buzz'],
        ];
    }
}
