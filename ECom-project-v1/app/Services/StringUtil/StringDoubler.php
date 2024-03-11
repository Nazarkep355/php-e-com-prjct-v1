<?php

namespace App\Services\StringUtil;

class StringDoubler implements StringProcessor
{

    function process($string)
    {
        return $string.$string;
    }
}
