<?php

namespace App\Livewire\Admin\Product2;

use Livewire\Component;
use App\Models\Product2;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MedType;
use App\Models\Attribute;
use App\Models\AttributeValue2;
use App\Models\Tax; 
use App\Models\Brand;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon; 
use App\Models\Disease;

class AddProduct2Component extends Component
{
    use WithFileUPloads;
    public $brandtype = [];
    public $brandhjs =[];
    public $brandsdname;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $additional_info;
    public $regular_price;
    public $sale_price;
    public $bulk_quantity;
    public $bulk_rate;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $images;
    public $category_id;
    public $scategory_id;
    public $medtype_id;
    public $brand_id;
    public $prescription;
    public $age_limit;
    public $expiry_date;
    public $is_baby;
    public $is_child;
    public $is_young;
    public $status;
    public $tax_id;
    public $freecancellation;
    public $meta_description;
    public $meta_keywords;

    public $attr;
    public $inputs = [];
    public $attribute_arr = [];
    public $attribute_values =[];

    // public $attribute_valuesf =[];
    public $para=[];

    public $skus=[];
    public $mrps=[];
    public $pris=[];
    public $qtyes=[];
    public $bulkqtys=[];
    public $bulkrates=[];
    public $disease_id = [];
    public $cod;
    public $refund;

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

    public function tablepara($attribute_valuesf)
    {
        $number = sizeof($attribute_valuesf); 

        $keysvalue = array_keys($attribute_valuesf);
        //dd($number,$keysvalue);
        foreach($keysvalue as $kvalue)
        {
            $size[$kvalue] =  explode(",",$attribute_valuesf[$kvalue]);
        }
        //dd($size[$kvalue]);
        if($number == 0){
            $para =[];
            return $para;
        }
        elseif($number == 1){
            foreach($size[$keysvalue[0]] as $namefd)
            {
                if(trim($namefd," ") != null){
                $para[] = $namefd;
                }
            }
            return $para;
        }else{
        
            foreach($size[$keysvalue[0]] as $namesd)
            {
                foreach($size[$keysvalue[1]] as $namefd)
                {
                    if(trim($namefd," ") != null){
                    $para[] = $namesd.','.$namefd;
                    }
                }
            }
            
            for($y=2;$y<$number;$y++)
            {
                    $l=0;
                    foreach($para as $namepd)
                    {
                        foreach($size[$keysvalue[$y]] as $namerd)
                        {
                            $para[$l] = $namepd.','.$namerd;
                            $l++;
                        }
                    }
            }
            return $para;
        }
    }

    public function add()
    {
        if(!in_array($this->attr,$this->attribute_arr))
        {
            array_push($this->inputs,$this->attr);
            array_push($this->attribute_arr,$this->attr);
           
        }
        //return;
        //dd($this->attribute_arr, $this->attr);
    }
    public function done()
    {
        //dd($this->attribute_values);trim($str," ")
        $this->para =$this->tablepara($this->attribute_values);
        $this->skus[0]=$this->SKU;
        $this->mrps[0]=$this->regular_price;
        $this->pris[0]=$this->sale_price;
        $this->qtyes[0]=$this->quantity;
        $this->bulkqtys[0]=$this->bulk_quantity;
        $this->bulkrates[0]=$this->bulk_rate;
    }
    public function remove($attr,$value)
    {
        unset($this->inputs[$attr]);
        unset($this->attribute_values[$value]);
        $this->para =$this->tablepara($this->attribute_values);
    }
    
    
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:product2s',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'bulk_quantity'=>'required|numeric',
            'bulk_rate'=>'required|numeric',
            'SKU'=>'required',
            'stock_status'=>'required',
            'featured'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
            'images'=>'required',
            'category_id'=>'required',
            'scategory_id'=>'required',
            'medtype_id'=>'required',
            'brand_id'=>'required',
            'prescription'=>'required',
            'age_limit' =>'required',
            'is_baby'=>'required',
            'is_child'=>'required',
            'is_young'=>'required',
            'tax_id' =>'required',
            'freecancellation' =>'required'
        ]);
    }

    public function render()
    {
        $categories=Category::all();
        $scategories = SubCategory::where('category_id',$this->category_id)->get();
        $attributes = Attribute::all();
        $brands = Brand::all();
        $medtypes = MedType::all();
        $taxs = Tax::all();
        $diseases = Disease::where('status','!=',3)->get();
        $this->brandhjs= Brand::all();
        return view('livewire.admin.product2.add-product2-component',['diseases'=>$diseases,
            'categories'=>$categories,'scategories'=>$scategories,'attributes'=>$attributes,'brands'=>$brands,'medtypes'=>$medtypes,'taxs'=>$taxs
        ])->layout('layouts.admin');
    }

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:product2s',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'bulk_quantity'=>'required|numeric',
            'bulk_rate'=>'required|numeric',
            'SKU'=>'required',
            'stock_status'=>'required',
            'featured'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
            'images'=>'required',
            'category_id'=>'required',
            'scategory_id'=>'required',
            'medtype_id'=>'required',
            'brand_id'=>'required',
            'prescription'=>'required',
            'age_limit' =>'required',
            'is_baby'=>'required',
            'is_child'=>'required',
            'is_young'=>'required',
            'tax_id' =>'required',
            'freecancellation' =>'required'
        ]);

        $product =new Product2();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description =  $this->short_description;
        $product->description = $this->description;
        $product->additional_info = $this->additional_info;
        $product->regular_price= $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->bulk_quantity= $this->bulk_quantity;
        $product->bulk_rate = $this->bulk_rate;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName= Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('product/feat',$imageName);
        $product->image = $imageName;

        if($this->images)
        {
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {
                $imgName = Carbon::now()->timestamp. $key.'.'.$image->extension();
                $image->storeAs('product',$imgName);
                $imagesname = $imagesname.','.$imgName;
            }
            $product->images = $imagesname;
        }
        $product->category_id= $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->meta_keywords = $this->meta_keywords;
        $product->meta_description = $this->meta_description;
        $product->brand_id = $this->brand_id;
        $product->medtype_id = $this->medtype_id;
        $product->prescription = $this->prescription;
        $product->age_limit = $this->age_limit;
        $product->expiry_date = $this->expiry_date;
        $product->is_baby = $this->is_baby;
        $product->is_child = $this->is_child;
        $product->is_young = $this->is_young;
        $product->tax_id = $this->tax_id;
        $product->freecancellation = $this->freecancellation;
        $product->discount_value = round((($this->regular_price - $this->sale_price)/$this->regular_price)*100, 2);
        $product->status = '1';
        $product->add_by = '1'; //Auth::user()->id;
        $product->save();

        foreach($this->attribute_values as $key=>$attribute_value)
        {
            $avalues = explode(",",$attribute_value);
            foreach($avalues as $avalue)
            {
                $attr_value = new AttributeValue2();
                $attr_value->attribute_id = $key;
                $attr_value->value = $avalue;
                $attr_value->product_id = $product->id;
                $attr_value->save();
            }
        }
        $j=1;
        foreach($this->para as $key => $tdata)
        {
            if($key == 0){
                $product->varaint_detail = $tdata;
                $product->save();
            }
            else{
            $product_varaint = new Product2();
            $product_varaint->name = $this->name;
            $product_varaint->slug = $this->slug.'-'.$tdata;
            $product_varaint->short_description =  $this->short_description;
            $product_varaint->additional_info = $this->additional_info;
            $product_varaint->description = $this->description;
            $product_varaint->regular_price= $this->mrps[$key];;
            $product_varaint->sale_price = $this->pris[$key];
            $product_varaint->bulk_quantity= $this->bulkqtys[$key];
            $product_varaint->bulk_rate = $this->bulkrates[$key];
            $product_varaint->SKU = $this->skus[$key];
            $product_varaint->stock_status = $this->stock_status;
            $product_varaint->featured = $this->featured;
            $product_varaint->quantity = $this->qtyes[$key];
            $product_varaint->image = $product->image;
            $product_varaint->images = $product->images;
            $product_varaint->category_id= $this->category_id;
            $product_varaint->subcategory_id = $this->scategory_id;
            $product_varaint->meta_keywords = $this->meta_keywords;
            $product_varaint->meta_description = $this->meta_description;
            $product_varaint->brand_id = $this->brand_id;
            $product_varaint->medtype_id = $this->medtype_id;
            $product_varaint->prescription = $this->prescription;
            $product_varaint->age_limit = $this->age_limit;
            $product_varaint->expiry_date = $this->expiry_date;
            $product_varaint->is_baby = $this->is_baby;
            $product_varaint->is_child = $this->is_child;
            $product_varaint->is_young = $this->is_young;
            $product_varaint->tax_id = $this->tax_id;
            $product_varaint->freecancellation = $this->freecancellation;
            $product_varaint->discount_value = round((($this->mrps[$key] - $this->pris[$key])/$this->mrps[$key])*100, 2);
            $product_varaint->status = '1';
            $product_varaint->add_by = '1'; //Auth::user()->id;
            $product_varaint->varaint_detail = $tdata;
            $product_varaint->parent_id = $product->id;
            $product_varaint->save();
            }
        }
        
        //dd($this->attribute_values);
        //$fgh =$this->tablepara($this->attribute_values);
        Session()->flash('message','Product has been Created Successfully!');
        //session()->put('varinat',$fgh);
    }
    
    public function brandseletc()
    {
        // dd($this->disease_id);
    }
    
    public function myFunction()
    {
      $this->brandhjs= Brand::where('brand_slug','LIKE',"%{$this->brandsdname}%" )->get();
    }
}
