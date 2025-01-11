<?php

namespace App\Livewire\Elmohnds;

use App\Models\Product;
use Livewire\Component;

class Wishlist extends Component
{
    public $products;
    public $whislist_id;

    public $cart = [];
    public $messageByProduct = []; 
    public $message = '';
    public function mount(){
        $this->whislist_id = session()->get('wishlist', []);
        $this->products = Product::whereIn('id', $this->whislist_id)->get();
        // dd($this->products);
    }


 
    public function addToCart($productId)
    {
        $product = Product::find($productId);
    
        // Check if the product exists
        if (!$product) {
            $this->messageByProduct[$productId] = 'المنتج غير متوفر';
            return;
        }
    
        // Check if the product is out of stock
        if ($product->is_out_of_stock) {
            $this->messageByProduct[$productId] = 'المنتج غير متوفر في المخزون';
            return;
        }
    
        // Check if the product is already in the cart
        $this->cart = session()->get('cart', []);
        if (!array_key_exists($productId, $this->cart)) {
            $this->cart[$productId] = 1; // Default quantity is 1
            session()->put('cart', $this->cart);
            $this->messageByProduct[$productId] = 'تم اضافةالمنتج للسله';
        } else {
            $this->messageByProduct[$productId] = 'المنتج فالسله بالفعل';
        }
    }
    
    public function render()
    {
        return view('livewire.elmohnds.wishlist');
    }
}
