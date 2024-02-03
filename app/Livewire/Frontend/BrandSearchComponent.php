<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Product2;
use App\Models\Category;


class BrandSearchComponent extends Component
{
    public $brand_slug;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $brandtype=[];
    public $discount =[];

    public function mount($brand_slug)
    {
        $this->sorting="default";
        $this->pagesize="12";
        $this->brand_slug = $brand_slug;
        $this->min_price =1;
        $this->max_price=60000;
    }
    public function render()
    {
        $brand_id = null;

        if($this->brand_slug)
        {
            $brand = Brand::where('brand_slug',$this->brand_slug)->first();
            $brand_id = $brand->id;
            $brand_name=$brand->brand_name;
        }
        $query = Product2::where('brand_id',$brand_id)->whereBetween('sale_price',[$this->min_price,$this->max_price]);
        if($this->sorting=="date"){
         $query=$query->orderBy('products.created_at','DESC');
        }
        if($this->sorting=="price"){
         $query=$query->orderBy('regular_price','ASC');
        }
        if($this->sorting=="price-desc"){
         $query=$query->orderBy('regular_price','DESC');
        }
        if($this->brandtype != null)
        {
         $query=$query->whereIn('brand_id',$this->brandtype);
        }
 
        if($this->discount != null)
        {
            $query=$query->where('discount_value','>',max($this->discount));
         
        }
        $query=$query->distinct()->select('product2s.*');
        
         $products=$query->paginate($this->pagesize);
        
        

        $categorys = Category::all();
        $brands = Brand::all();
        // $products =Product2::where('brand_id',$brand_id)->whereBetween('sale_price',[$this->min_price,$this->max_price])->get();

        return view('livewire.frontend.brand-search-component',['categorys'=>$categorys,'brand_name'=>$brand_name,'products'=>$products])->layout('layouts.main');
    }
    public function brandseletc()
    {
       // dd($this->brandtype);
    }
}
