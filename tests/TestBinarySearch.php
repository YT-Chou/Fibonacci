<?php
include __DIR__. '/bootstrap.php';

use Taylor\Math\BinarySearch;
use function Taylor\Math\biSearch;

$array = array(1, 2, 3, 4, 5);

echo BinarySearch::binSearch(3, $array);
echo "\r\n";
echo biSearch(3, $array);
echo "\r\n";
