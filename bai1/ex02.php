<?php

function hello()
{
    echo "<h1>Hello world</h1>";
}

hello();

$sum = function (...$numbers) {
    return array_sum($numbers);
};

function sum(...$numbers)
{
    return array_sum($numbers);
}

// echo sumNumber(1, 2, 3, 4, 5);

echo $sum(1, 2, 3, 4, 5);

$x = 'sum';
echo "<br />";
if (is_callable($x)) {
    echo $x(1, 2, 3, 4, 5);
} else {
    echo "Đây không phải là hàm";
}

//callback

$array = [1, 2, 3, 4, 5];
function numberx2($element)
{
    return $element * 2;
}
$array2 = array_map('numberx2', $array);
echo "<pre>";
var_dump($array2);


$array3 = array_map(fn ($element) => $element * 4, $array);
var_dump($array3);
