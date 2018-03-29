<?php
declare(strict_types=1);
namespace UnitTest;

use Taylor\Math\PascalTriangle;
use PHPUnit\Framework\TestCase;

final class PascalTest extends TestCase
{
    public function test1()
    {
        $expected = "[1]";
        $result = PascalTriangle::run(1);
        $this->assertEquals($expected, $result);
    }
    public function test5()
    {
        $expected = "    [1],\n   [1,1],\n  [1,2,1],\n [1,3,3,1],\n[1,4,6,4,1]";
        $result = PascalTriangle::run(5);
        $this->assertEquals($expected, $result);
    }
}
