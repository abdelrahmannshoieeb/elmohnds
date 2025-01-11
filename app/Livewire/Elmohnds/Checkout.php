<?php

namespace App\Livewire\Elmohnds;

use App\Models\Cart;
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


    public $name, $address, $phone, $email, $city , $government;
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
        // dd(session()->all());
    }

   
   


    public function updateShippingCost($cityId)
    {
        $this->shipping = $this->getShippingForCity($cityId);
    }
    private function getShippingForCity($cityId)
    {
        $shipping = Shiping::where('id', $cityId)->first();
        $this ->shipping = $shipping->price;
        $this ->government = $shipping->name;
        return $shipping ? $shipping->price : 10; // Default to 10 if no rate found
    }


    public function placeOrder () {

        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'email|max:255',
            'city' => 'required|string|max:255',
        ]);
        $cart = session()->get('cart');
        if ( empty($cart)) {
            session()->flash('success', '  اختر المنتجات اولا');
        }
        else {
          // dd([
        //     'name' => $this->name,
        //     'address' => $this->address,
        //     'phone' => $this->phone,
        //     'email' => $this->email,
        //     'city' => $this->city,
        //     'government' => $this->government,

        // ]);

        $order = new \App\Models\Order([
            'name' => $this->name,
            'landmark' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'city' => $this->city,
            'government' => $this->government,
            'shipping' => $this->shipping,
            'subtotal' => $this->subtotal,
            'total' => $this->subtotal + $this->shipping,
            'cart_id' => session()->get('cartid'),
        ]);
        $order->save();
        $cart = Cart::find(session()->get('cartid'));
        $cart->status = 'pending';
        $cart->save();
        session()->forget('cartid');
        session()->forget('cart');

        $this->reset([
            'name', 'address', 'phone', 'email', 'city',
        ]);
        
        session()->flash('success', '  تم ارسال الطلب بنجاح');
        }
        
        
    }
    public function render()
    {
        return view('livewire.elmohnds.checkout');
    }
}
