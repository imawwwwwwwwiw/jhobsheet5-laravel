<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman dashboard dengan data yang telah diinputkan.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() : View
    {
        // Mengambil data yang telah diinputkan dari model (misalnya)
        $product = Product::All(); // Gantilah 'YourModel' dengan nama model Anda
        
        // Kemudian lewatkan data tersebut ke view 'dashboard'
        return view('home.index', ['product' => $product]);
    }
    
    
}
