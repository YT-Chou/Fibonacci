<?php
declare(strict_types=1);
namespace UnitTest;

use Taylor\Math\BinarySearch;
use PHPUnit\Framework\TestCase;

final class BiSearchTest extends TestCase
{
    public function testNormal()
    {
        $srcArray = array(1, 2, 3, 5, 8, 13, 21, 34);
        $this->assertEquals(3, BinarySearch::search(5, $srcArray));
    }

    public function testHead()
    {
        $srcArray = array(1, 2, 3, 5, 8, 13, 21, 34);
        $this->assertEquals(0, BinarySearch::search(1, $srcArray));
    }

    public function testTail()
    {
        $srcArray = array(1, 2, 3, 5, 8, 13, 21, 34);
        $this->assertEquals(7, BinarySearch::search(34, $srcArray));
    }

    public function testNotFoundCase1()
    {
        $srcArray = array(1, 2, 3, 5, 8, 13, 21, 34);
        $this->assertEquals(-1, BinarySearch::search(20, $srcArray));
    }

    public function testNotFoundCase2()
    {
        $srcArray = array(1, 2, 3, 5, 8, 13, 21, 34);
        $this->assertEquals(-1, BinarySearch::search(100, $srcArray));
    }
}
