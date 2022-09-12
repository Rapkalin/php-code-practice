<?php

use Challenge\app\romansToIntegers\romansToIntegers;
use Challenge\app\oneTarget\oneTarget;

require_once 'vendor/autoload.php';
require_once 'app/autoloader.php';
Autoloader::register();

// 2- One target
$nums1 = [11,15, 2,7];
$nums2 = [3,2,4];
$nums3 = [3,2,3];
$nums4 = [0,4,3,0];
$nums5 = [-1,-2,-3,-4];
$target1 = 9;
$target2 = 6;
$target3 = 6;
$target4 = 0;
$target5 = -8;
dump(oneTarget::twoSum($nums3, $target3));

// 1- Romans to integers
$test1 = "III"; // 3
$test2 = "LVIII"; // 58
$test3 = "MCMXCIV"; // 1994
$test4 = "CDM"; // 400
/*dump(romansToIntegers::solution($test1));
dump(romansToIntegers::solution($test2));
dump(romansToIntegers::solution($test3));*/
// dump(romansToIntegers::solution($test4));

echo 'End of challenges';
