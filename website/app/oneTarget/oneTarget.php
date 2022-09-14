<?php

namespace Challenge\app\oneTarget;

class oneTarget
{

    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    static public function twoSum(array $nums, int $target) : array
    {
        // For each num I add up the other nums of the array and if the result match the target then I save there indexes in the result array and return the final array
        foreach ($nums as $i => $num) {
            for ($j = $i +1; array_key_exists($j, $nums); $j++) {
                if ($num + $nums[$j] === $target) {
                    return [array_search($num, $nums), $j];
                }
            }
        }

        // Optimized solution after review
/*        for($i = 0; ($i < count($nums)); $i++) {
            for ($j = $i +1; array_key_exists($j, $nums); $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }*/
    }
}