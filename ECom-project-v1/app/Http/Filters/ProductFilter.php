<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const DETAIL = 'detail';
    public const CATEGORY_ID = 'category_id';
    public const MIN_PRICE = 'min_price';
    public const MAX_PRICE = 'max_price';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DETAIL => [$this, 'detail'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::MAX_PRICE => [$this, 'maxPrice'],
            self::MIN_PRICE => [$this, 'minPrice'],
        ];
    }

    public function title(Builder $builder, $value)
    {
//   echo('title');
        $builder->where('title', 'like', "%{$value}%");
    }

    public function detail(Builder $builder, $value)
    {
//        dump('detail');
        $builder->whereHas('details', function ($query) use ($value) {
            $query->where('value', 'like', "%{$value}%");
        });
    }
    public function maxPrice(Builder $builder, $value)
    {
        $builder->where('price', '<=', $value);
    }
    public function minPrice(Builder $builder, $value)
    {
        $builder->where('price', '>=', $value);
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
