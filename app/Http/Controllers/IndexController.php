<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'image', 'category_id', 'discount', 'brand_id')->get();
        $categories = Category::all();
        $banner11 = Banner::where('order', '1.1')->first();
        $banner12 = Banner::where('order', '1.2')->first();
        $banner13 = Banner::where('order', '1.3')->first();
        $banner21 = Banner::where('order', '2.1')->first();
        $banner22 = Banner::where('order', '2.2')->first();
        $banner23 = Banner::where('order', '2.3')->first();
        $brands = Brand::all();
    
        // dd($banner11);
        return view('elmohnds.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'banner11' => $banner11,
            'banner12' => $banner12,
            'banner13' => $banner13,
            'banner21' => $banner21,
            'banner22' => $banner22,
            'banner23' => $banner23
        ]);
    }
    
}
