<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product2;
use Livewire\WithPagination;

class CategorySearchComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $category_slug;
    public $scategory_slug;
    public $brandtype=[];
    public $discount =[];

    // public function mount()
    // {
    //     $this->sorting="default";
    //     $this->pagesize="12";
    //     $this->min_price =1;
    //     $this->max_price=60000;
    // }
    public function mount($category_slug,$scategory_slug=null)
    {
        $this->sorting="default";
        $this->pagesize="12";
        $this->category_slug = $category_slug;
        $this->min_price =1;
        $this->max_price=60000;
        $this->scategory_slug = $scategory_slug;
    }

    public function render()
    {
        $category_id = null;
        $category_name = "";
        $filter= "";
        $category = "";
        $scategory = "";
        $scategory_id =null;
        $scategory_name="";
        
        if($this->scategory_slug)
        {
            $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
            $scategory_id = $scategory->id;
            $scategory_name = $scategory->name;
            $filter= "sub";
        }
        if($this->category_slug){
            $category=Category::where('slug',$this->category_slug)->first();
            $category_id= $category->id;
            $category_name =$category->name;
            $filter= "";
        }
        $query = Product2::whereBetween('sale_price',[$this->min_price,$this->max_price]);
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

        $categorys = Subcategory::where('category_id',$category_id)->get();
        $brands = Brand::all();


        return view('livewire.frontend.category-search-component',['categorys'=>$categorys,'brands'=>$brands,
        'category_name'=>$category_name,'scategory'=>$scategory,'CATegory'=>$category,'products'=>$products])->layout('layouts.main');
    }

    public function brandseletc()
    {
       // dd($this->brandtype);
    }
}
