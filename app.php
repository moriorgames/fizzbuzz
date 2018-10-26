<?php

use App\FizzBuzzServicePrinter;

require __DIR__ . '/vendor/autoload.php';

$printer = new FizzBuzzServicePrinter;
$printer->print();
