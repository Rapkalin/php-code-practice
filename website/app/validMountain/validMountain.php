<?php

namespace Challenge\app\validMountain;

class validMountain
{
    public static function resolve($arr)
    {
        $is_valid = false;
        $up = true;

        if (count($arr) >= 3) {
            foreach ($arr as $i => $num) {

                if (isset($arr[$i+1]) && $arr[$i] > $arr[$i+1]) {
                    $up = false;
                }

                if (
                    isset($arr[$i+1])
                    && ($arr[$i] === $arr[$i+1] || ($i === 0 && $arr[$i] > $arr[$i+1]))
                ) {
                    return false;
                }

                if (($up === false && (isset($arr[$i+1]) && ($arr[$i] > $arr[$i+1]))) || ($up === true && (isset($arr[$i+1]) && ($arr[$i] < $arr[$i + 1])))) {
                    $is_valid = true;
                } elseif (isset($arr[$i+1]) || $arr[$i] > $arr[$i-1]) {
                    return false;
                }
            }
        } else {
            return false;
        }
        return $is_valid;


        // Solution proposée
/*        $N = count($arr);
        $i = 0;

        # walk up
        while ($i+1 < $N && $arr[$i] < $arr[$i+1]) {
            $i++;
        }

        # peak can't be first or last
        if ($i === 0 || $i === $N-1) {
            return false;
        }

        # walk down
        while ($i+1 < $N && $arr[$i] > $arr[$i+1]) {
            $i++;
        }

        return $i === ($N-1);*/

    }
}

