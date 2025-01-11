<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ElmohndsProducts extends Component
{
    public $categories ;
    public $products ;

    public $wishlist = [];
    public $message = '';

    public $minPrice ;
    public $maxPrice ;

    public function mount(){
        $this->categories = Category::all();
        $this->products = Product::all();
        $this->wishlist = session()->get('wishlist', []);
    }

    public function filterByCategory($category_id){
        $this->products = Product::where('category_id', $category_id)->get();
    }

    public function filterByPrice($minPrice, $maxPrice)
    {
        // dd($minPrice, $maxPrice);
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;

        // Fetch products within the price range
        $this->products = Product::whereBetween('price', [$this->minPrice, $this->maxPrice])->get();
    }







    public function addToWhislist($productId)
    {
        if (!in_array($productId, $this->wishlist)) {
            $this->wishlist[] = $productId;
            session()->put('wishlist', $this->wishlist);
            $this->message = 'Product added to wishlist!';
        } else {
            $this->message = 'Product is already in the wishlist!';
        }
    }

    public function render()
    {
        return view('livewire.products.elmohnds-products');
    }
}
