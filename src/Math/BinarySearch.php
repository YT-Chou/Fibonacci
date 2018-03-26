<?php
declare(strict_types=1);
namespace Taylor\Math;

class BinarySearch
{
    public static function binSearch(int $key, array $srcArray):int
    {
        $length = count($srcArray);
        $left = 0; //index
        $right = $length - 1; //index
        while ($left <= $right) {
            $mid = intdiv(($left+$right), 2);
            if ($srcArray[$mid] === $key) {
                return $mid;
            }
            if ($key > $srcArray[$mid]) {
                $left = $mid + 1;
            }
            if ($key < $srcArray[$mid]) {
                $right = $mid -1;
            }
            if ($left > $right) {
                return -1;
            }
        }
    
        return -1; // -1: not Found
    }
}
