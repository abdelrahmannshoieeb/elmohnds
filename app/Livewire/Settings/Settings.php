<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Settings extends Component
{

    
    public $settings;

    public $address;
    public $phone;
    public $email;
    public $website;
    public $review_approve = false;
    public $rating_approve = false;
  


    public $title = 'تفاصيل', $attribute, $customAttributes = [];
    public function mount()
    {
        $this->settings = Setting::first();
        $this->address = $this->settings->address;
        $this->phone = $this->settings->phone;
        $this->email = $this->settings->email;
        $this->website = $this->settings->website;
        $this->review_approve = $this->settings->review_approve;
        $this->rating_approve = $this->settings->rating_approve;
    }
    protected $rules = [
        'address' => ' nullable|string|max:255',
        'phone' => 'nullable|string|14',
        'email' => 'nullable',
        'website' => 'nullable',
    ];
    

    protected function rules()
    {
        return $this->rules;
    }

   
   
    public function save()
    {
        $this->settings->update([
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'website' => $this->website,
            'review_approve' => $this->review_approve,
            'rating_approve' => $this->rating_approve
        ]);
        session()->flash('message', 'تم تحديث الاعدادات بنجاح');
    }
    public function render()
    {
        return view('livewire.settings.settings');
    }
}
