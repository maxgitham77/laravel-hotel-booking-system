<?php

namespace App\Http\Controllers\Frontend\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex()
    {
        return view('frontend.shop.shop-page');
    }
}
