<?php

namespace App\Http\Controllers;

use App\Services\StringUtil\StringProcessor;
use Illuminate\Http\Request;

class StringController extends Controller
{
    public function process(StringProcessor $processor, Request $request)
    {   $string = $request->string;
        return $processor->process($string);
    }
    public function count(StringProcessor $processor, Request $request)
    {
        $string = $request->string;
        return $processor->count($string);
    }
}
