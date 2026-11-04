<?php
$text = "Laravel and PHP diploma";
// $searchString = "PHP";
$searchString = "course";

if (preg_match("/$searchString/", $text)) {
    echo "The string was found";
} else
    echo "The string was not found";
