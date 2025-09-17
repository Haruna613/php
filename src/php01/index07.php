<?php
function triangle($width, $height)
{
    $total = $width * $height / 2;
    return $total;
}

$number = triangle(2,3);
echo $number;