<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        $product = Product::All(); 

        return view('home.index', ['product' => $product]);
    } 
}