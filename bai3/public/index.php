<?php

// spl_autoload_register(function ($class) {
//     $path = lcfirst(str_replace("\\", "/", $class));
//     require_once __DIR__ . "/../" . $path . ".php";
//     // echo $path;
// });
require_once __DIR__ . "/../vendor/autoload.php";

use App\BankHD;
use App\ClassA;
use App\ClassB;
use App\ClassC;

$bank = new BankHD;

$bank->tranfer(100);

echo "<br />" . BankHD::PI;
echo "<br />Static " . BankHD::$name;


$classA = new App\ClassA;
$classB = new App\ClassB;
$classA->getClass();
$classB->getClass();

$classC = new ClassC;
$classA->show();
$classC->show();
