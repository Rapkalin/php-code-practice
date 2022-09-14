<?php

namespace Challenge\app\naturalNumbers;

class naturalNumbers
{
    static public function sumNatural(int $a, int $b)
    {
        $sum = 0;
        while ($a <= $b) {
            $sum += $a;
            ++$a;
        }
        echo $sum;

        // Optimized solution
/*        $total = 0;
        for ($i=$a; $i<=$b;$i++) {
            $total += $i;
        }
        echo $total;*/
    }

}