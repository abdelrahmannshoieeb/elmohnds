<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Categories extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $search;
    public $categories;


 public function mount()
{
    $this->categories = Category::all(); 
}

    public function save()
    {
        $imagePath = $this->image ? $this->image->store('categories', 'public') : null;

        $this->validate([
            'name' => 'required',
        ]);
        
        Category::create([
            'name' => $this->name,
            'image' => $imagePath
        ]);
        $this->name = '';
        $this->categories = Category::all(); 

    }

    public function delete($id)
    {
        $category = Category::find($id);
        
        foreach ($category->products as $product) {
            $product->attributes()->delete();
            $product->ratings()->delete();
            $product->cartitems()->delete();
            $product->wishlists()->delete();
            $product->reviews()->delete();
        }
    
        $this->categories = Category::all();
    }
    
    public function thesearch()
    {
        $this->categories = Category::where('name', 'like', '%' . $this->search . '%')->get();
    }

    public function viewAll() {

        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.categories.categories');
    }
}
