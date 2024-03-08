<?php

namespace App\Services;

use App\Http\Filters\ProductFilter;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class PostService
{
    public function findPosts($data)
    {
        $page = 1;
        if (isset($data['page'])) {
            $page = $data->page;
        }

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        return Cache::rememberForever('posts:'.implode($data), function () use ($filter) {
            return Product::filter($filter)
                ->paginate(20);
        });
    }

    public function findPost($id)
    {
        return Cache::remember('post' . $id, 60 * 15, function () use ($id) {
            return Post::find($id);
        });
    }
}
