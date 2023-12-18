<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MedType;
use App\Models\Attribute;
use App\Models\Attributevalue;
use App\Models\Brand;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon; 
 
class AddProductComponent extends Component
{
    use WithFileUPloads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $images;
    public $scategory_id;

    public $attr;
    public $inputs = [];
    public $attribute_arr = [];
    public $attribute_values;

    // public $attribute_valuesf =[];
    public $para=[];

    public $skus;
    public $mrps;
    public $pris;
    public $qtyes;
    public $attr_image;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;                                                                        
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }
    
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'SKU'=>'required',
            'stock_status'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
            'category_id'=>'required',
        ]);
    }


    public function render()
    {
        $categories=Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $attributes = Attribute::all();
        $brands = Brand::all();
        return view('livewire.admin.product.add-product-component',[
            'categories'=>$categories,'scategories'=>$scategories,'attributes'=>$attributes,'brands'=>$brands
        ])->layout('layouts.admin');
    }
}
