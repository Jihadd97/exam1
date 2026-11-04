<?php
echo "<table border>";
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 8; $j++) {

        $color = (($i + $j) % 2 == 0) ? "white" : "black";
        echo "<td bgcolor='$color' width='13' height='13'></td>";
    }
    echo "</tr>";
}
echo "</table>";
