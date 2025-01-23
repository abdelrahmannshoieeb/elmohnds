<?php

namespace App\Livewire\Brands;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;

class Brands extends Component
{

    use WithFileUploads;
    public $name;
    public $image;
    public $search;
    public $brands;


 public function mount()
{
    $this->brands = Brand::all(); 
}

    public function save()
    {
        $imagePath = $this->image ? $this->image->store('brands', 'public') : null;

        $this->validate([
            'name' => 'required',
        ]);
        
        Brand::create([
            'name' => $this->name,
            'image' => $imagePath
        ]);
        $this->name = '';
        $this->image = '';

        $this->brands = Brand::all(); 

    }

    public function delete($id)
    {
        $category = Brand::find($id);
        
        if ($category) {
            // Delete related attributes for all products in the category
            foreach ($category->products as $product) {
                $product->attributes()->delete();
                $product->ratings()->delete();
                $product->cartitems()->delete();
                $product->wishlists()->delete();
                $product->reviews()->delete();
            }
        
            // Delete the products
            $category->products()->delete();
        
            // Delete the category
            $category->delete();
        }
    
        $this->brands = Brand::all();
    }
    
    public function thesearch()
    {
        $this->brands = Brand::where('name', 'like', '%' . $this->search . '%')->get();
    }

    public function viewAll() {

        $this->brands = Brand::all();
    }

    public function render()
    {
        return view('livewire.brands.brands');
    }
}
