<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testProduct()
    {
        $product1= Product::find(1);
        echo 'product1: '.$product1->title;

        echo ' category:'. $product1->category;

            $details = $product1->details;
        foreach ($details as $d ){
            dump($d->detailTitle);
    }
    }
}
