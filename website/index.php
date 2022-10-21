<?php

use Challenge\app\romansToIntegers\romansToIntegers;
use Challenge\app\oneTarget\oneTarget;
use Challenge\app\regex\regex;
use Challenge\app\chunk\chunk;
use Challenge\app\naturalNumbers\naturalNumbers;
use Challenge\app\validMountain\validMountain;
use Challenge\app\valueToTheEnd\valueToTheEnd;


require_once 'vendor/autoload.php';
require_once 'app/autoloader.php';
Autoloader::register();

// 8- Array sort complexty
$array = [ 1, 5, 7, 10,'A', 'A', 'B', 'C', 5];
$searchedValue = 'A';
   ;
// 7- Sum Ten
/*$pass = 'Capitales';
$array = [];
$sumArr1 = [9, 4, 2, 6, 15];
$sumArr2 = [3, 5, 1, 7];
$sumArr3 = [5, 5, 2, 4, 6];
$sumArr4 = [5, 2, 5, 7, 3];*/
dump(valueToTheEnd::moveValueToTheEnd($array, $searchedValue));

// 6- Valid mountain
$arr1 = [3,5,5]; // false
$arr2 = [0,3,2,1]; // true
$arr3 = [0, 2, 3, 3, 5, 2, 1, 0]; // false
$arr4 = [0, 2, 3, 4, 5, 2, 1, 0]; // true
$arr5 = [2,0,2]; // false
$arr6 = [0,1,2,3,4,5,6,7,8,9]; // false
$arr7 = [3,7,6,4,3,0,1,0]; // false
$arr8 = [9,8,7,6,5,4,3,2,1,0]; // false
$arr9 = [6,7,7,8,6]; // false
// dump(validMountain::resolve($arr4));

// 5- Natural Numbers
$a1 = 3332;
$b1 = 3334;
// dump(naturalNumbers::sumNatural($a1, $b1));

// 4- Chunk
$chunks1 = 6;
$size1 = 10;
$chunks2 = 1;
$size2 = 6;
$chunks3 = 0;
$size3 = 10;
$chunks4 = 15;
$size4 = 15;
// dump(chunk::pourcentage($chunks4, $size4));

// 3- Regex
$text = "ABgCrDgEFGhHijklmno";
// dump(regex::regex($text));

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
// dump(oneTarget::twoSum($nums3, $target3));

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
