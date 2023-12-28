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
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
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
            'slug' => 'required|unique:products',
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
        ]);
    }


    public function render()
    {
        $categories=Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $attributes = Attribute::all();
        $brands = Brand::all();
        $medtypes = MedType::all();
        return view('livewire.admin.product.add-product-component',[
            'categories'=>$categories,'scategories'=>$scategories,'attributes'=>$attributes,'brands'=>$brands,'medtypes'=>$medtypes
        ])->layout('layouts.admin');
    }


    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
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
        ]);

        $product =new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description =  $this->short_description;
        $product->description = $this->description;
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
        $product->brand_id = $this->brand_id;
        $product->medtype_id = $this->medtype_id;
        $product->prescription = $this->prescription;
        $product->age_limit = $this->age_limit;
        $product->expiry_date = $this->expiry_date;
        $product->is_baby = $this->is_baby;
        $product->is_child = $this->is_child;
        $product->is_young = $this->is_young;
        $product->status = '1';
        $product->add_by = '1'; //Auth::user()->id;
        $product->save();

        foreach($this->attribute_values as $key=>$attribute_value)
        {
            $avalues = explode(",",$attribute_value);
            foreach($avalues as $avalue)
            {
                $attr_value = new AttributeValue();
                $attr_value->attribute_id = $key;
                $attr_value->value = $avalue;
                $attr_value->product_id = $product->id;
                $attr_value->save();
            }
        }
        $j=1;
        foreach($this->para as $key => $tdata)
        {
            $product_varaint = new ProductVariant();
            $product_varaint->varaint_detail = $tdata;
            $product_varaint->product_id = $product->id;
            $product_varaint->v_SKU = $this->skus[$key];
            $product_varaint->v_regular_price = $this->mrps[$key];
            $product_varaint->v_sale_price = $this->pris[$key];
            $product_varaint->v_quantity = $this->qtyes[$key];
            $product_varaint->v_bulkqty = $this->bulkqtys[$key];
            $product_varaint->v_bulkrate = $this->bulkrates[$key];
            $product_varaint->v_stock_status = 'instock';
            $j++;
            $product_varaint->save();
        }
        
        //dd($this->attribute_values);
        //$fgh =$this->tablepara($this->attribute_values);
        Session()->flash('message','Product has been Created Successfully!');
        //session()->put('varinat',$fgh);
    }
    
}
