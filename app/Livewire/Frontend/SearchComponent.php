<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product2;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $search;
    public $brandtype=[];
    public $discount =[];
    
    public function mount(Request $request)
    {
        $this->sorting="default";
        $this->pagesize="12";
        $this->min_price ='10';
        $this->max_price='500';
        $this->search = $request->search;

    }
    public function render()
    {
        $category_id = Category::where('slug','like','%'.$this->search.'%')->first() ? Category::where('slug','like','%'.$this->search.'%')->first()->id :''; 
        $brand_id = Brand::where('brand_slug','like','%'.$this->search.'%')->first() ? Brand::where('brand_slug','like','%'.$this->search.'%')->first()->id : '';
        $subcategory_id = SubCategory::where('slug','like','%'.$this->search.'%')->first() ? SubCategory::where('slug','like','%'.$this->search.'%')->first()->id : '';
        
        $query = Product2::whereBetween('sale_price',[$this->min_price,$this->max_price])->where('status',1);
        if($category_id){
         $query=$query->where('category_id',$category_id);
        }elseif($subcategory_id){
            $query=$query->where('subcategory_id',$subcategory_id);
        }elseif($brand_id){
            $query=$query->where('brand_id',$brand_id);
        }else{
          $query=$query->where('name','like','%'.$this->search .'%');
        }

        $query=$query->distinct()->select('product2s.*');
        $products=$query->paginate(20);
        // dd($products);

        $brands = Brand::where('status',1)->get();
        $categories = Category::where('status',1)->get();
        return view('livewire.frontend.search-component',['categories'=>$categories,'products'=>$products,'brands'=>$brands])->layout('layouts.main');
    }
    public function brandseletc()
    {
    //    dd($this->discount);
    }
}
