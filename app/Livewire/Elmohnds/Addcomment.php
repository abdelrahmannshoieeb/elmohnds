<?php

namespace App\Livewire\Elmohnds;

use App\Models\Review;
use Livewire\Component;

class Addcomment extends Component
{
    public $rating;
    public $review;
    public $product_id;


    public function mount()
    {
        $this->product_id = request()->segment(2);
    }
    public function save()
    {

        $comment = new Review();
        $comment->user_id = auth()->id();
        $comment->product_id = $this->product_id;
        $comment->comment = $this->review;
        $comment->save();
    }
    public function render()
    {
        return view('livewire.elmohnds.addcomment');
    }
}
