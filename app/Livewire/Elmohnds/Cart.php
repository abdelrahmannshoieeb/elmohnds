<?php

namespace App\Livewire\Elmohnds;

use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $total;

    public $items = [];


    public function mount()
    {
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

                    $this->total += $itemTotal; // Add the item total to the overall total
                }
            }
        }
    }
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);
        $cart = array_filter($cart, function ($item) use ($id) {
            return $item['product_id'] != $id;
        });
        session()->put('cart', $cart);
        $this->items = $cart;
        session()->flash('message', 'Item removed from cart.');
    }
    
    public function updateQuantity($productId, $change)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);
    
        // Loop through the cart items
        foreach ($cart as $key => &$item) {
            if ($item['product_id'] == $productId) {
                // Update the quantity
                $item['quantity'] += $change;
    
                // Ensure quantity is not negative
                if ($item['quantity'] < 1) {
                    // Remove the item from the cart if quantity is 0 or less
                    unset($cart[$key]);
                    session()->flash('message', 'Item removed from cart.');
                }
    
                break;
            }
        }
    
        // Update the session and component data
        session()->put('cart', $cart);
        $this->mount(); // Refresh the component
    }
    public function saveCart()
    {
        $userId = Auth::check() ? Auth::id() : null;
        $cartId = DB::table('carts')->insertGetId([
            'user_id' => $userId ? $userId : null,
            'status'  => 'started',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach ($this->items as $item) {
            DB::table('cart_items')->insert([
                'qty'        => $item['qty'],
                'product_id' => $item['id'],
                'cart_id'    => $cartId,
                'user_id'    => $userId ? $userId : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        session()->put('cartid', $cartId);
        session()->flash('message', 'Cart saved successfully!');
    }
    public function render()
    {
        return view('livewire.elmohnds.cart');
    }
}
