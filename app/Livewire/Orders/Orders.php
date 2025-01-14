<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{

 
    public $statuses = ['started', 'cancelled', 'pending', 'seen', 'rejected' , 'completed' , 'deliverd' , 'refuse_to_deliver']; 
    public $SearchId;
    public $orders = [];

    public function mount()
    {
        $this->orders = Order::with('cart.cartitems')->get();

        // foreach ($this->orders as $order) {
        //     dd($order->cart->cartitems);
        // }
    }


    public function updateStatus($orderId, $newStatus)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->status = $newStatus;
            $order->save();
        }

        // Update the orders list to reflect the change
        $this->orders = Order::all();
    }
 
    public function delete($orderId)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->delete();
        }
        $this->orders = Order::all();
    }

    public function updatedSearchId()
    {
        $this->orders = Order::where('id', 'like', '%' . $this->SearchId . '%')->get();
    }
    public function render()
    {
        return view('livewire.orders.orders');
    }
}
