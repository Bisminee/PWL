<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage(){
        return view('product.food-beverage');
    }
    public function beautyHealth(){
        return view('product.beauty-health');
    }
    public function homeCare(){
        return view('product.home-care');
    }
    public function babyKid(){
        return view('product.baby-kid');
    }
}
