<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
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
    public function testProduct(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class,['queryParams'=>array_filter($data)]);
        $product = Product::filter($filter)->paginate(10);
        dump($product);
    }
}
