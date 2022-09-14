<?php

namespace Challenge\app\regex;

class regex
{
    static public function regex(string $text)
    {
        preg_match_all('/[A-Z]/', $text, $up);
        preg_match_all('/[a-z]/', $text, $low);

        echo implode($up[0]) . "<br>" . implode($low[0]);
        return 1;
    }

}