<?php

namespace App\Services\StringUtil;

class StringReverser implements StringProcessor
{

    function process($string)
    {
        return strrev($string);
    }
}
