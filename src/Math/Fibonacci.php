<?php
declare(strict_types=1);
namespace Taylor\Math;

function fibon(int $n):int
{
    if ($n < 0) {
        echo "Error!";
        return -1;
    }
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }

    return fibon($n-2) + fibon($n-1);
}


class Fibonacci
{
    public static function fib(int $n):int
    {
        if ($n < 0) {
            echo "Error!";
            return -1;
        }
        if ($n === 0) {
            return 0;
        }
        if ($n === 1) {
            return 1;
        }

        return self::fib($n-2) + self::fib($n-1);
    }
}
