<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
echo "<pre>";
print_r($array);

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        } else {
            $temp = $array[$j];
        }
    }
}
echo "<br>ASCENDING ORDER";
echo "<pre>";
print_r($array);
echo "<hr>";

########################################################

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        } else {
            $temp = $array[$j];
        }
    }
}
echo "<br>DESCENDING ORDER";
echo "<pre>";
print_r($array);