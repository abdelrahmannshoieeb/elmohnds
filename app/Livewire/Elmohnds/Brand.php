<?php

namespace App\Livewire\Elmohnds;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Brand extends Component
{

    public $categories ;
    public $products ;

    public $wishlist = [];
    public $message = '';

    public $minPrice ;
    public $maxPrice ;

    public function mount(){

        $brand_id = request()->segment(2);
        $this->categories = DB::table('categories')->get();
        $this->products = Product::where('brand_id', $brand_id)->get();
        $this->wishlist = session()->get('wishlist', []);
    }

    public function filterByCategory($brand_id){
        $this->products = Product::where('brand_id', $brand_id)->get();
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
        return view('livewire.elmohnds.brand');
    }
}
