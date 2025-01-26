<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{

 
    public $statuses = [
        'started' => 'تم البدء',
        'cancelled' => 'تم الإلغاء',
        'pending' => 'قيد الانتظار',
        'seen' => 'تمت المشاهدة',
        'rejected' => 'مرفوض',
        'completed' => 'مكتمل',
        'delivered' => 'تم التسليم',
        'refuse_to_deliver' => 'رفض التسليم',
    ];    public $SearchId;
    public $orders = [];

    public function mount()
    {
        $this->orders = Order::with('cart.cartitems')->get();

        // foreach ($this->orders as $order) {
        //     dd($order->cart->cartitems);
        // }
    }


    public function updateStatus($contactId, $statusArabic)
    {
        // Convert Arabic status to English
        $statusEnglish = array_search($statusArabic, $this->statuses);

        $contact = Order::find($contactId);

        if ($contact) {
            $contact->update([
                'status' => $statusEnglish, // Store in English
            ]);

            session()->flash('message', 'تم تحديث الحالة بنجاح.');
            $this->orders = Order::all(); // Refresh the contacts list
        } else {
            session()->flash('error', 'لم يتم العثور على الاتصال.');
        }
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
