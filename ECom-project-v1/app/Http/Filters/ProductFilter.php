<?php

namespace App\Http\Filters;

class ProductFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const DETAIL = 'detail';
    public const CATEGORY_ID = 'category_id';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DETAIL => [$this, 'detail'],
            self::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

//    public function detail(Builder $builder, $value)
//    {
//        $builder->whereHas();
//    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
