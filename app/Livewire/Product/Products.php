<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $products;
    public $categories;
    public $search;



    public $productQuantityAdded;
    public $quantityDropdown = 1;
    public $price;


    public function mount()
    {
        $this->products = Product::all();
        $this->categories = Category::all();
    }
    public function delete($id)
    {
        $product = Product::find($id);
    
        if ($product) {
            $product->attributes()->delete();
            $product->cartitems()->delete();
            $product->reviews()->delete();
    
            $product->delete();
    
            // dd($product);
        }
    
        $this->products = Product::all();
        redirect()->route('products');
    }

    public function thesearch()
    {
        $this->products = Product::where('name', 'like', '%' . $this->search . '%')->get();
    }
    public function toggleStatus($productId)
    {
        $product = Product::find($productId);
    
        if ($product) {
            $product->status = $product->status === 'active' ? 'inactive' : 'active';
            $product->save();
            session()->flash(
                'message',
                $product->status === 'active' ? 'The product is now active.' : 'The product is now inactive.'
            );
        }
        $this->products = Product::all();
    }

    public function viewAll()
    {

        $this->products = Product::all();
    }

  

  
    public function categoryFilter($id)
    {
        $this->products = Product::where('category_id', $id)->get();
    }


   
    public function render()
    {
        return view('livewire.product.products');
    }
}
