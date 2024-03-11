<?php

namespace App\Services\StringUtil;

trait Countable
{
    function count($string)
    {
        return strlen($string);
    }
}
