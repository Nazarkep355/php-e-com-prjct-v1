<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public function detailTitle()
    {
       return $this->belongsTo(Detail_title::class,'id');
    }
}
