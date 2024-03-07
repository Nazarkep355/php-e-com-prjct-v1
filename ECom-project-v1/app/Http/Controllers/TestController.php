<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testProduct1()
    {
        $product1= Product::find(1);
        echo 'product1: '.$product1->title;

        echo ' category:'. $product1->category;

            $details = $product1->details;
        foreach ($details as $d ){
            dump($d->detailTitle);
    }
    }
    public function testProduct()
    {   $detailName = '16';
        $product = Product::whereHas('details', function ($query) use ($detailName) {
            $query->where('value','like', "%{$detailName}%");
        })->paginate(10);
        dump($product);
    }
}
