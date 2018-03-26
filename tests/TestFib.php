<?php
include __DIR__. '/bootstrap.php';

use Taylor\Math\Fibonacci;
use function Taylor\Math\fibon;

for ($i=0 ; $i<10 ; $i++) {
    echo Fibonacci::fib($i). ' ';
}



for ($i=0 ; $i<10 ; $i++) {
    echo fibon($i). ' ';
}
