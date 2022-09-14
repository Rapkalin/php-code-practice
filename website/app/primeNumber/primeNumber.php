<?php

namespace Challenge\app\primeNumber;


class primeNumber
{

    static public function primeNumber($n)
    {
        $prime[] = 0;
        $x = $n-$n;
        $y = $n+$n;
        for ($i = $x; $i < $y + 1; $i++) {
            $prime[] = prime($i);
        }

        $m = [$prime[(array_search($n, $prime) - 1)], $prime[array_search($n, $prime)], $prime[array_search($n, $prime) + 1]];
        $sum = array_sum($m) / 3;

        if ($n < $sum) {
            echo("WEAK\n");
        } elseif ($n === $sum) {
            echo("BALANCED\n");
        } elseif ($n > $sum) {
            echo("STRONG\n");
        }
    }


    static public function prime($n)
    {
        $num = 0;

        for ($i = 2; $i <= ($n / 2); $i++) {
            if ($n % $i === 0) {
                $n++;
                break;
            }
        }

        if ($num == 0) {
            echo $n . " ";
        }
    }

}


/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $height);
fscanf(STDIN, "%d", $width);
fscanf(STDIN, "%s", $material);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
$mat = [];

for ($i = 0; $i < $width; $i++) {
    $mat[] = $material;
}

$s = implode('', $mat);
error_log(var_export($s, true));

echo($s . "\n");


