<?php

namespace App\Services\StringUtil;

class StringDoubler implements StringProcessor
{
    use Countable;
    function process($string)
    {
        return $string.$string;
    }
}
