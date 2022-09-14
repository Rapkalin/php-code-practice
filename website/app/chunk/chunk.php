<?php

namespace Challenge\app\chunk;

class chunk
{
    static public function pourcentage(int $chunks, int $size)
    {
        $result = ceil(($chunks / $size) * 100);

        // condition with loop while $i <= $chunks with put # and after ... until $i = $size

        for($i = 0; $i < $chunks; $i++) {
            echo '#';
        }

        for($i = 0; ($i < ($size - $chunks)); $i++) {
            echo '.';
        }

        echo(" $result%\n");

    }

}



