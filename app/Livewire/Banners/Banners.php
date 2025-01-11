<?php

namespace App\Livewire\Banners;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banners extends Component
{
    use WithFileUploads;
    public $image11 , $button11_direction  = 'left' , $main_text11 , $secondary_text11 , $button_text11; 
    public $image12 , $button12_direction  = 'left' , $main_text12 , $secondary_text12 , $button_text12; 
    public $image13 , $button13_direction  = 'left' , $main_text13 , $secondary_text13 , $button_text13; 
    public $image21 , $button21_direction  = 'left' , $main_text21 , $secondary_text21 , $button_text21; 
    public $image22 , $button22_direction  = 'left' , $main_text22 , $secondary_text22 , $button_text22; 
    public $image23 , $button23_direction  = 'left' , $main_text23 , $secondary_text23 , $button_text23; 


    public function mount()
    {
        // Retrieve existing banners from the database
        $banners = Banner::whereIn('order', ['1.1', '1.2', '1.3', '2.1', '2.2', '2.3'])->get()->keyBy('order');
    
        // Initialize variables for each banner
        $this->image11 = $banners->has('1.1') ? $banners->get('1.1')->image : null;
        $this->button11_direction = $banners->has('1.1') ? $banners->get('1.1')->direction : null;
        $this->main_text11 = $banners->has('1.1') ? $banners->get('1.1')->main_text : null;
        $this->secondary_text11 = $banners->has('1.1') ? $banners->get('1.1')->seconderay_text : null;
        $this->button_text11 = $banners->has('1.1') ? $banners->get('1.1')->button_text : null;
    
        $this->image12 = $banners->has('1.2') ? $banners->get('1.2')->image : null;
        $this->button12_direction = $banners->has('1.2') ? $banners->get('1.2')->direction : null;
        $this->main_text12 = $banners->has('1.2') ? $banners->get('1.2')->main_text : null;
        $this->secondary_text12 = $banners->has('1.2') ? $banners->get('1.2')->seconderay_text : null;
        $this->button_text12 = $banners->has('1.2') ? $banners->get('1.2')->button_text : null;
    
        $this->image13 = $banners->has('1.3') ? $banners->get('1.3')->image : null;
        $this->button13_direction = $banners->has('1.3') ? $banners->get('1.3')->direction : null;
        $this->main_text13 = $banners->has('1.3') ? $banners->get('1.3')->main_text : null;
        $this->secondary_text13 = $banners->has('1.3') ? $banners->get('1.3')->seconderay_text : null;
        $this->button_text13 = $banners->has('1.3') ? $banners->get('1.3')->button_text : null;
    
        $this->image21 = $banners->has('2.1') ? $banners->get('2.1')->image : null;
        $this->button21_direction = $banners->has('2.1') ? $banners->get('2.1')->direction : null;
        $this->main_text21 = $banners->has('2.1') ? $banners->get('2.1')->main_text : null;
        $this->secondary_text21 = $banners->has('2.1') ? $banners->get('2.1')->seconderay_text : null;
        $this->button_text21 = $banners->has('2.1') ? $banners->get('2.1')->button_text : null;
    
        $this->image22 = $banners->has('2.2') ? $banners->get('2.2')->image : null;
        $this->button22_direction = $banners->has('2.2') ? $banners->get('2.2')->direction : null;
        $this->main_text22 = $banners->has('2.2') ? $banners->get('2.2')->main_text : null;
        $this->secondary_text22 = $banners->has('2.2') ? $banners->get('2.2')->seconderay_text : null;
        $this->button_text22 = $banners->has('2.2') ? $banners->get('2.2')->button_text : null;
    
        $this->image23 = $banners->has('2.3') ? $banners->get('2.3')->image : null;
        $this->button23_direction = $banners->has('2.3') ? $banners->get('2.3')->direction : null;
        $this->main_text23 = $banners->has('2.3') ? $banners->get('2.3')->main_text : null;
        $this->secondary_text23 = $banners->has('2.3') ? $banners->get('2.3')->seconderay_text : null;
        $this->button_text23 = $banners->has('2.3') ? $banners->get('2.3')->button_text : null;
    }
    
    public function saveGroup11()
    {
        $imagePath = $this->image11 ? $this->image11->store('banners', 'public') : null;
    
        // dd($this->button11_direction);
        // Find or create banner and update the fields
        $banner11 = Banner::updateOrCreate(
            ['order' => '1.1'], // Find by this condition
            [
                'main_text' => $this->main_text11,
                'seconderay_text' => $this->secondary_text11,
                'button_text' => $this->button_text11,
                'direction' => $this->button11_direction,
                'image' => $imagePath ?? Banner::where('order', '1.1')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image11', 'button11_direction', 'main_text11', 'secondary_text11', 'button_text11']);
        redirect(route('banners'));
    }
    

    // Save Group 12
    public function saveGroup12()
    {
        $imagePath = $this->image12 ? $this->image12->store('banners', 'public') : null;
    
        // Find or create banner and update the fields
        $banner12 = Banner::updateOrCreate(
            ['order' => '1.2'], // Find by this condition
            [
                'main_text' => $this->main_text12,
                'seconderay_text' => $this->secondary_text12,
                'button_text' => $this->button_text12,
                'direction' => $this->button11_direction,
                'image' => $imagePath ?? Banner::where('order', '1.2')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image12', 'button12_direction', 'main_text12', 'secondary_text12', 'button_text12']);
        redirect(route('banners'));

    }

    // Repeat for Groups 13, 21, 22, and 23 with corresponding `order` values
    public function saveGroup13()
    {
        $imagePath = $this->image13 ? $this->image13->store('banners', 'public') : null;
    
        // Find or create banner and update the fields
        $banner13 = Banner::updateOrCreate(
            ['order' => '1.3'], // Find by this condition
            [
                'main_text' => $this->main_text13,
                'seconderay_text' => $this->secondary_text13,
                'button_text' => $this->button_text13,
                'direction' => $this->button13_direction,
                'image' => $imagePath ?? Banner::where('order', '1.3')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image13', 'button13_direction', 'main_text13', 'secondary_text13', 'button_text13']);
        redirect(route('banners'));

    }

    public function saveGroup21()
    {
        $imagePath = $this->image21 ? $this->image21->store('banners', 'public') : null;
    
        // Find or create banner and update the fields
        $banner11 = Banner::updateOrCreate(
            ['order' => '2.1'], // Find by this condition
            [
                'main_text' => $this->main_text21,
                'seconderay_text' => $this->secondary_text21,
                'button_text' => $this->button_text21,
                'direction' => $this->button21_direction,
                'image' => $imagePath ?? Banner::where('order', '2.1')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image21', 'button21_direction', 'main_text21', 'secondary_text21', 'button_text21']);
        redirect(route('banners'));

    }

    public function saveGroup22()
    {
        $imagePath = $this->image22 ? $this->image22->store('banners', 'public') : null;
    
        // Find or create banner and update the fields
        $banner11 = Banner::updateOrCreate(
            ['order' => '2.2'], // Find by this condition
            [
                'main_text' => $this->main_text22,
                'seconderay_text' => $this->secondary_text22,
                'button_text' => $this->button_text22,
                'direction' => $this->button22_direction,
                'image' => $imagePath ?? Banner::where('order', '2.2')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image22', 'button22_direction', 'main_text22', 'secondary_text22', 'button_text22']);
        redirect(route('banners'));

    }

    public function saveGroup23()
    {
        $imagePath = $this->image23 ? $this->image23->store('banners', 'public') : null;
    
        // Find or create banner and update the fields
        $banner11 = Banner::updateOrCreate(
            ['order' => '2.3'], // Find by this condition
            [
                'main_text' => $this->main_text23,
                'seconderay_text' => $this->secondary_text23,
                'button_text' => $this->button_text23,
                'direction' => $this->button23_direction,
                'image' => $imagePath ?? Banner::where('order', '2.3')->value('image'), // Keep the old image if a new one isn't provided
            ]
        );
        $this->reset(['image23', 'button23_direction', 'main_text23', 'secondary_text23', 'button_text23']);
        redirect(route('banners'));

    }
    public function render()
    {
        return view('livewire.banners.banners');
    }
}
