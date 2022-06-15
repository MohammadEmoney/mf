<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'latest_products' => Product::has('images')
                    ->with(['images', 'featuredImage', 'category'])
                    ->onSale()
                    ->published()
                    ->hasPrice()
                    ->latest()
                    ->take(10)
                    ->get(),
            'top_selling' => Product::has('images')
                        ->with(['images', 'featuredImage', 'category'])
                        ->onSale()
                        ->published()
                        ->hasPrice()
                        ->latest()
                        ->take(10)
                        ->get(),
        ];

        return view('front.index', compact('data'));
    }
}
