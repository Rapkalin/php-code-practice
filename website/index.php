<?php

use Challenge\app\romansToIntegers\romansToIntegers;

require_once 'vendor/autoload.php';
require_once 'app/autoloader.php';
Autoloader::register();

$test1 = "III"; // 3
$test2 = "LVIII"; // 58
$test3 = "MCMXCIV"; // 1994
dump(romansToIntegers::solution($test1));
dump(romansToIntegers::solution($test2));
dump(romansToIntegers::solution($test3));

echo 'End of challenges';
