<?php

namespace App\Services;

use App\Http\Filters\ProductFilter;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductService
{
    public function findProducts($data)
    {
        $page = 1;
        if (isset($data['page'])) {
            $page = $data['page'];
        }

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        return Cache::rememberForever('products:'.implode($data), function () use ($filter) {
            return Product::filter($filter)
                ->paginate(20);
        });
    }

    public function findProduct($id)
    {
        return Cache::remember('product' . $id, 60 * 15, function () use ($id) {
            return Product::find($id);
        });
    }

    public function findProductJSON($id)
    {
        $product = $this->findProduct($id);
        return new ProductResource($product);
    }
}
