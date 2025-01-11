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
            $category->delete();  // Delete the category
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
