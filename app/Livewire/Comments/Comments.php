<?php

namespace App\Livewire\Comments;

use App\Models\Review;
use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public $searchProduct;

    public function updatedSearchProduct() {
        $this->comments = Review::whereHas('product', function ($query) {
            $query->where('name', 'like', '%' . $this->searchProduct . '%');
        })->get();
            }


    public function mount()
    {
        $this->comments = Review::all();
    }

    public function delete($commentId)  {
        $comment = Review::find($commentId);
        if ($comment) {
            $comment->delete();
        }
        $this->comments = Review::all();
    }

    public function render()
    {
        return view('livewire.comments.comments');
    }
}
