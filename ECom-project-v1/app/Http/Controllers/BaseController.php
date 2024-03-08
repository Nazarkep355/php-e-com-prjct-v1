<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;

class BaseController extends Controller
{   public $service;
    public function __construct(ProductService $service)
    {
        $this->service= $service;
    }
}
