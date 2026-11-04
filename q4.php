<?php
$arr = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
echo "Average = " . $sum / count($arr);
