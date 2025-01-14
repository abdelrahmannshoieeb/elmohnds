<?php

namespace App\Livewire\Product;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $image;
    public $gallary = [];
    public $stock;
    public $isActive;
    public $rating;
    public $discount;
    public $category_id;
    public $brand_id;

    public $categories;
    public $brands;


    public $title = 'تفاصيل', $attribute, $customAttributes = [];
    public function mount()
    {
        $this->categories = Category::all();
        $this->brands = Brand::all();
    }
    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'stock' => 'nullable|numeric',
        'rating' => 'nullable|numeric|min:0|max:5',
        'discount' => 'nullable|numeric',
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

    // protected function customValidate()
    // {
    //     $this->validate();

    //     // Custom validation logic
    //     if ($this->buying_price !== null) {
    //         if ($this->buying_price >= $this->price1 || $this->buying_price >= $this->price2 || $this->buying_price >= $this->price3) {
    //             throw ValidationException::withMessages([
    //                 'buying_price' => 'يجب ان يكون سعر الشراء اقل من سعر البيع.',
    //             ]);
    //         }
    //     }

    //     if ($this->stockAlert !== null && $this->stockAlert >= $this->itemStock) {
    //         throw ValidationException::withMessages([
    //             'stockAlert' => 'يجب ان يكون تنبيه المخزون اقل من العدد في المخزون.',
    //         ]);
    //     }
    // }
   
    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|image|max:1024', // max size 1MB
            'gallary.*' => 'nullable|image|max:1024',
        ]);

        $imagePath = $this->image ? $this->image->store('productImages', 'public') : null;

        $galleryPaths = [];
        if ($this->gallary) {
            foreach ($this->gallary as $image) {
                $galleryPaths[] = $image->store('productGallery', 'public');
            }
        }

        $product = Product::create([
            'name' => $this->name,
            'desc' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'rating' => $this->rating,
            'status' => $this->isActive ? 'active' : 'inactive',
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'image' => $imagePath,
            'discount' => $this->discount,
            'gallary' => json_encode($galleryPaths),
        ]);

        // dd($this->customAttributes);
        foreach ($this->customAttributes as $attr) {
            Attribute::create([
                'name' => $attr['name'],
                'value' => $attr['value'],
                'product_id' => $product->id,
            ]);
        }

        $this->reset('name', 'description', 'discount' ,'price', 'stock', 'isActive', 'category_id', 'brand_id', 'image', 'gallary', 'customAttributes');
        session()->flash('message', 'تم اضافة المنتج بنجاح');
    }
    public function addAttribute()
    {
        $this->validate([
            'title' => 'required|string',
            'attribute' => 'required|string',
        ]);

        $this->customAttributes[] = [
            'name' => $this->title,
            'value' => $this->attribute,
        ];

        $this->reset('title', 'attribute');
    }

    public function removeAttribute($index)
    {
        unset($this->customAttributes[$index]);
        $this->customAttributes = array_values($this->customAttributes); // Re-index array
    }

    
    public function render()
    {
        return view('livewire.product.add-product');
    }
}
