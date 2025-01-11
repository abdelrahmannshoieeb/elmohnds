<?php

namespace App\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditProduct extends Component
{

    public $categories;
    public $brands;
    public $product_id;
    public $product;

    public $name, $description, $status, $price, $stock ;
    public $image, $gallary,$brand_id, $category_id;

    public function mount()
    {
        $this->product_id = request()->segment(2);
        $this->categories = Category::all();
        $this->brands = Brand::all();
        $this->product = Product::find($this->product_id);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'stock' => 'nullable|numeric',
        'isActive' => 'boolean',
        'category_id' => 'nullable|exists:categories,id',
        'brand_id' => 'nullable|exists:brands,id',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Single image file validation
        'gallary.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Validation for each image in the gallery array
    ];
    

    protected function rules()
    {
        return $this->rules;
    }
    public function save()
    {
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('productImages', 'public');
        }
        
        $galleryPaths = [];
        if ($this->gallary) {
            foreach ($this->gallary as $image) {
                $galleryPaths[] = $image->store('productGallery', 'public');
            }
        }
        $this->product->update([
         'name' => $this->name,
                'desc' => $this->description,
                'price' => $this->price,
                'stock' => $this->stock,
                'category_id' => $this->category_id,
                'brand_id' => $this->brand_id,
                'image' => $imagePath,
                'gallary' => json_encode($galleryPaths), // Save gallery
        ]);

        session()->flash('message', 'تم التعديل بنجاح');
    }








    public function deleteImage()
{
    if ($this->product->image) {
        Storage::delete($this->product->image); // Delete the image file
        $this->product->update(['image' => null]); // Update the database
        session()->flash('message', 'Product image deleted successfully.');
    }
}

public function deleteGalleryImage($index)
{
    $gallery = $this->product->gallery;

    if (isset($gallery[$index])) {
        Storage::delete($gallery[$index]); // Delete the gallery image file
        unset($gallery[$index]); // Remove the image from the gallery array
        $this->product->update(['gallery' => array_values($gallery)]); // Update the database
        session()->flash('message', 'Gallery image deleted successfully.');
    }
}

    public function render()
    {
        return view('livewire.product.edit-product');
    }
}
