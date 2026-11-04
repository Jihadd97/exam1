<?php
$arr = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$newArr = [];
echo "<pre>";
print_r($arr);

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 != 0)
        $newArr[] = $arr[$i];
}

echo "<br>Filtered Array";
echo "<pre>";
print_r($newArr);
