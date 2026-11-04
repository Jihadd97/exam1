<?php
$date ="2012-12-21";
$nextMonth = date("Y-m-d" , strtotime($date."+1 month"));

echo "Sample date: ". $date . "<br>";
echo "Expected Output: ". $nextMonth;