<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Filterable;
    protected $guarded=false;
    public function details()
    {
        return $this->hasMany(Detail::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
