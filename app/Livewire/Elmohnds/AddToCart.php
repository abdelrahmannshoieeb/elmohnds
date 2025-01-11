<?php

namespace App\Livewire\Elmohnds;

use Carbon\Carbon;
use Livewire\Component;

class AddToCart extends Component
{
    public $productId;
    public $product;
    public $gallery;
    public $threeDaysLater;
    public $wishlist = [];


    public $cart = [];
    public $quantity = 1; // Default quantity
    public $successMessage = null; 

    public function mount()
    {
        $this->threeDaysLater = Carbon::now()->addDays(3)->format('d - d M, Y');
        $this->wishlist = session()->get('wishlist', []);
        $this->productId = request()->segment(2);
        $this->product = \App\Models\Product::find($this->productId);
        if ($this->product->gallary) {
            $this->gallery = json_decode($this->product->gallary, true); // Decode the JSON string
            // dd()
        }
    }



    public function addToWishlist($productId)
    {
        if (!in_array($productId, $this->wishlist)) {
            $this->wishlist[] = $productId;
            session()->put('wishlist', $this->wishlist);
        } 
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        $cart = session()->get('cart', []);
        $key = array_search($this->productId, array_column($cart, 'product_id'));
        
        
        if ($key !== false) {
            $cart[$key]['quantity'] += $this->quantity;
        } else {
            $cart[] = [
                'product_id' => $this->productId,
                'quantity' => $this->quantity,
            ];
        }
        session()->put('cart', $cart);
        $this->quantity = 1;
        $this->successMessage = 'Product added to cart successfully!';
    }
    public function render()
    {
        return view('livewire.elmohnds.add-to-cart');
    }
}
