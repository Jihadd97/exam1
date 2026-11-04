<?php
// Shape1
echo "SHAPE 1 <br><br>";
for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        for ($k = 5 - $i; $k > 0; $k--) {
            echo "&nbsp";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
    } else {
        for ($k = $i - 5; $k > 0; $k--) {
            echo "&nbsp";
        }
        for ($j = 10 - $i; $j >= 1; $j--) {
            echo "*";
        }
    }
    echo "<br>";
}
echo "<hr>";

##################################################
// Shape2
echo "SHAPE 2 <br><br>";
for ($i = 1; $i <= 10; $i++) {

    if ($i < 5) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
    } elseif ($i == 5 || $i == 6) {

        for ($j = 5; $j >= 1; $j--) {
            echo "*";
        }
    } else {

        for ($j = 11 - $i; $j >= 1; $j--) {
            echo "*";
        }
    }
    echo "<br>";
}
echo "<hr>";

##################################################

// Shape3
echo "SHAPE 3 <br><br>";
for ($i = 1; $i <= 5; $i++) {

    if ($i <= 3) {

        for ($j = 1; $j <= ($i * 2) - 1; $j++) {
            echo "*";
        }
    } else {

        for ($j = 1; $j <= (2*(5-$i))+1; $j++) {
            echo "*";
        }
    }
    echo "<br>";
}
