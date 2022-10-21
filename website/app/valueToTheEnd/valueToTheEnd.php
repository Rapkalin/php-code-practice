<?php

namespace Challenge\app\valueToTheEnd;

class valueToTheEnd
{
    public static function moveValueToTheEnd(array $array, $searchedValue) : array
    {
        dump('initial array', $array);

        $j = 0;
        for ($i = 0; $i < (count($array)); $i++) {

            if ($array[$i] === $searchedValue && isset($array[$i + 1])) {
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $searchedValue;
                if (isset($array[$j + 1]) && $array[$j + 1] != $searchedValue) {
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $searchedValue;
                }
            }
            if ($array[$j] != $searchedValue) {
                $j++;
            }

        }
        return $array;
    }
}