<?php

namespace Challenge\app\romansToIntegers;

class romansToIntegers
{
    /**
     * @param String $s
     * @return Integer
     */
    static public function solution($s)
    {
        $chars = str_split($s);
        $chars_allowed = ['I', 'V', 'X', 'L', 'C', 'D', 'M'];
        $points = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $result = 0;

        // We proceed if $s.length is longer than 0 but less than 16
        if(count($chars) >= 1 && count($chars) <= 15) {

            foreach($chars as $index => $char) {
                // We check if the characters sent are allowed
                if(in_array($chars[$index], $chars_allowed)) {

                    // We handle the specific cases
                    if(isset($chars[$index+1]) && $points[$chars[$index]] < $points[$chars[$index+1]]) {
                        $result -= $points[$chars[$index]];
                    } else {
                        $result += $points[$chars[$index]];
                    }
                }
            }
        }

        if(($result >= 1) && ($result <= 3999)) {
            return $result;
        }
        return false;
    }
}