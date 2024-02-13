<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product2;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $brandtype=[];
    public $discount =[];

    public function mount()
    {
        $this->sorting="default";
        $this->pagesize="12";
        $this->min_price ='10';
        $this->max_price='500';
    }

    public function render()
    {
    //    dd($this->min_price);
        $query = Product2::whereBetween('sale_price',[$this->min_price,$this->max_price]);
       if($this->sorting=="date"){
        $query=$query->orderBy('product2s.created_at','DESC');
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
       // dd(max($this->discount));
        $query=$query->where('discount_value','>=',min($this->discount));
        
       }
       
        //dd($this->discount);
         $query=$query->distinct()->select('product2s.*');
       
        $products=$query->paginate($this->pagesize);
// dd($products);
        $categorys = Category::all();
        $brands = Brand::all();
       
        return view('livewire.frontend.shop-component',['categorys'=>$categorys,'brands'=>$brands,'products'=>$products])->layout('layouts.main');
    }


    public function brandseletc()
    {
       // dd($this->brandtype);
    }
}
