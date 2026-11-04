<?php
function checkPrime(int $num)
{
    if ($num <= 1) {
        echo $num . " is not a prime number";
        return;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo $num . " is not a prime number<br>";
            return;
        }
    }
    echo $num . " is a prime number";
}
// checkPrime(0);
// checkPrime(1);
checkPrime(10);
// checkPrime(13);
// checkPrime(20);