<?php
declare(strict_types=1);
namespace Taylor\Math;

class PascalTriangle
{
    private function numRowToStr(array $numArray):string
    {
        $arr = array_map('strval', $numArray);
        $outputString = implode(',', $arr);
        return $outputString;
    }
    private function finalRow(int $whichLevel, int $numOfRows, string $levelString):string
    {
        $numOfspace = $numOfRows - $whichLevel - 1;
        $result = '';
        for ($i = 0; $i < $numOfspace; $i++) {
            $result .= ' ';
        }
        $result .= '[';
        $result .= $levelString;
        $result .= ']';

        return $result;
    }
    private function calNum(int $n):array
    {
        for ($i = 0; $i < $n; $i++) {
            $NumberArray[$i][0] = 1;
            for ($j = 1; $j < $i; $j++) {
                $NumberArray[$i][$j] = $NumberArray[$i-1][$j]+$NumberArray[$i-1][$j-1];
            }
            $NumberArray[$i][$i] = 1;
        }
        return $NumberArray;
    }
    public static function run(int $numOfRows):string
    {
        $num2D = self::calNum($numOfRows);
        $str1D = array();
        for ($i = 0; $i <$numOfRows; $i++) {
            $str1D[$i] = self::finalRow($i, $numOfRows, self::numRowToStr($num2D[$i]));
        }
        $final = implode(",\n", $str1D);
        echo "\n";
        echo $final;
        return $final;
    }
}
