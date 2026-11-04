<?php
$arr = [10, 30, 20];
$maxNum = $arr[0];

for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] > $maxNum) {
        $maxNum = $arr[$i];
    }
}

echo "The maximum number = " . $maxNum;
