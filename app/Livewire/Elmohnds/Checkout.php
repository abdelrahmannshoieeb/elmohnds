<?php

namespace App\Livewire\Elmohnds;

use App\Models\Shiping;
use Livewire\Component;

class Checkout extends Component
{

    public $cities;


    public $cart;
    public $subtotal;
    public $shipping = 0;
    public $total;
    public $items = [];


    public $name, $address, $phone, $email, $city;
    public function mount()
    {
        $this->cities = Shiping::all();
        if (session()->has('cart')) {
            $cartItems = session('cart'); // Retrieve the cart session
            $this->items = [];
            $this->total = 0; // Reset total

            foreach ($cartItems as $cartItem) {
                $product = \App\Models\Product::find($cartItem['product_id']);

                if ($product) {
                    $itemTotal = $product->price * $cartItem['quantity']; // Calculate item total
                    $this->items[] = [
                        'id'    => $product->id,
                        'name'  => $product->name,
                        'price' => $product->price,
                        'qty'   => $cartItem['quantity'],
                        'subtotal' => $itemTotal, // Add subtotal for this item
                    ];

                    $this->subtotal += $itemTotal; // Add the item total to the overall total
                }
            }
        }

    }

   
   


    public function updateShippingCost($cityId)
    {
        $this->shipping = $this->getShippingForCity($cityId);
    }

    // Fetch shipping cost for the selected city from the shipping table
    private function getShippingForCity($cityId)
    {
        $shipping = Shiping::where('id', $cityId)->first();
        $this ->shipping = $shipping->price;
        return $shipping ? $shipping->price : 10; // Default to 10 if no rate found
    }


    public function placeOrder () {

        
    }
    public function render()
    {
        return view('livewire.elmohnds.checkout');
    }
}
