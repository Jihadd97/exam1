<?php
$date = date("Y-m-d");
$previousMonth = date("m" , strtotime($date."-1 month"));

echo "Current Month: ". $date . "<br>";
echo "Previous month: ". $previousMonth;