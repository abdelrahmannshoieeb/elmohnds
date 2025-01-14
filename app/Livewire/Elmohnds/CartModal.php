<?php

namespace App\Livewire\Elmohnds;

use App\Models\Shiping;
use Livewire\Component;

class CartModal extends Component
{

    public $cart;
    public $total;
    public $min_shipping;

    public $items = [];




    public function mount()
    {
        $this->updateCart();
    }

    public function updateCart()
    {
        $this->items = [];
        $this->total = 0;

        if (session()->has('cart')) {
            $cartItems = session('cart'); // Retrieve the cart session

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

                    $this->total += $itemTotal; // Add the item total to the overall total
                }
            }
        }

        $this->min_shipping = \App\Models\Shiping::min('price');
    }
    public function render()
    {
        return view('livewire.elmohnds.cart-modal');
    }
}
