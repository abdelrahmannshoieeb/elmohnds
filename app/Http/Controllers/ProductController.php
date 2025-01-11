<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ($id){

        $product = Product::find($id);

  

    // Fetch the category of the current product
    $category = $product->category;

    // Fetch other products in the same category (excluding the current product)
    $relatedProducts = Product::where('category_id', $product->category_id)
                              ->where('id', '!=', $id)
                              ->get();

    // Pass the data to the view
    return view('elmohnds.product', [
        'product' => $product,
        'relatedProducts' => $relatedProducts,
    ]);
    }
}
