<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends BaseController
{
    public function products(FilterRequest $request)
    {   $data = $request->validated();

        $products =$this->service->findProducts($data);
       return view('products-list',compact('products'));
    }

    public function product($id)
    {
        $product =$this->service->findProduct($id);
        return(view('product',compact('product')));
    }
    public function search()
    {
        return view('search');
    }
    public function jsonProduct($id)
    {   return $this->service->findProductJSON($id);

    }
}
