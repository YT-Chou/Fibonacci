<?php
declare(strict_types=1);
namespace UnitTest;

use Taylor\Math\Fibonacci;
use PHPUnit\Framework\TestCase;

final class FibTest extends TestCase
{
    public function testFib1()
    {
        $this->assertEquals(1, Fibonacci::fib(2)); // fib(2) = 1
    }

    public function testFib2()
    {
        $expected = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34);
        $resultArray = array();
        for ($i = 0; $i < 10; $i++) {
            array_push($resultArray, Fibonacci::fib($i));
        }
        $this->assertEquals($expected, $resultArray);
    }
}
