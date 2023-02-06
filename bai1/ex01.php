<?php
//Đặt chế độ nghiêm ngặt trong php
declare(strict_types=1);

function sum(int $a, int|float $b)
{
    return $a + $b;
}

echo "<h1>" . sum(10, 5.5) . "</h1>";

$cource1 = "PHP";
$cource2 = "javascript";
$cource3 = "HTML & CSS";

$cource = array("PHP", "Javascript", "HTML & CSS", 10.2);

echo $cource[1], $cource[2], $cource[0];

echo "<pre>";

print_r($cource);

var_dump($cource);
