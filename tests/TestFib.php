<?php

include __DIR__. '/bootstrap.php';

use Taylor\Math\Fibonacci;
use function Taylor\Math\fibon;

for ($i=0 ; $i<10 ; $i++) {
    echo Taylor\Math\Fibonacci::fib($i). ' ';
}

echo "\r\n";

for ($i=0 ; $i<10 ; $i++) {
    echo fibon($i). ' ';
}
