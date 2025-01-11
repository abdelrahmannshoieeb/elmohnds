<?php

namespace App\Livewire\Elmohnds;

use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public $name;
    public $phone;
    public $device;    
    public $customer_type = 'individual';    
    public $contract_duration = 'year';
    
    public function send(){
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'device' => 'required',
            'customer_type' => 'required',
            'contract_duration' => 'required',
        ]);

        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'device' => $this->device,
            'customer_type' => $this->customer_type,
            'contract_duration' => $this->contract_duration
        ]);

        redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.elmohnds.contacts');
    }
}
