<?php

namespace App\Services\StringUtil;

class StringReverser implements StringProcessor
{
    use Countable;
    function process($string)
    {
        return strrev($string);
    }
}
