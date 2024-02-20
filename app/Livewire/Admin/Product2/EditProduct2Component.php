<?php

namespace App\Livewire\Admin\Product2;

use Livewire\Component;
use App\Models\Product2;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MedType;
use App\Models\Attribute;
use App\Models\Attributevalue2;
use App\Models\Brand;
use App\Models\Tax; 
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon; 
use App\Models\ProductQuantity;
use App\Models\Disease;

class EditProduct2Component extends Component
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
    public $productvariant;
    public $skus=[];
    public $mrps=[];
    public $pris=[];
    public $qtyes=[];
    public $bulkqtys=[];
    public $bulkrates=[];
    public $newimages;
    public $newimage;
    public $product_id;
    public $varaintadata;
    public $newquantity;
    public $newqtyes=[];
    public $disease_id = [];
    public $cod;
    public $refund;


    public function mount($product_slug)
    {
        $product = Product2::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->bulk_quantity= $product->bulk_quantity;
        $this->bulk_rate = $product->bulk_rate;
        $this->SKU = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = explode(",",$product->images);
        //dd($product->images);
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->subcategory_id;
        $this->brand_id = $product->brand_id;
        $this->medtype_id = $product->medtype_id;
        $this->prescription = $product->prescription;
        $this->age_limit = $product->age_limit;
        $this->expiry_date = $product->expiry_date;
        $this->is_baby = $product->is_baby;
        $this->is_child = $product->is_child;
        $this->is_young = $product->is_young;
        $this->tax_id = $product->tax_id;
        $this->freecancellation = $product->freecancellation;
        $this->additional_info = $product->additional_info;
        $this->meta_description = $product->meta_description;
        $this->meta_keywords = $product->meta_keywords;
        $this->product_id = $product->id;
        $this->cod = $product->cod;
        $this->refund = $product->refund;
         $this->disease_id = json_decode($product->disease_id);
       // $this->inputs = $product->attributeValues->where('product_id',$product->id)->unique('attribute_id')->pluck('attribute_id');
       // $this->attribute_arr = $product->attributeValues->where('product_id',$product->id)->unique('attribute_id')->pluck('attribute_id');
        
        // foreach($this->attribute_arr as $a_arr)
        // {
        //     $allAttributeValue = AttributeValue::where('product_id',$product->id)->where('attribute_id',$a_arr)->get()->pluck('value');
        //     $valueString = '';
        //     foreach($allAttributeValue as $value)
        //     {
        //         $valueString = $valueString . $value.',';
        //     }     
        //     $this->attribute_values[$a_arr] = rtrim($valueString,",");
        // }
        //dd($this->attribute_values);
        // if($this->attribute_values){
        //     $this->para =$this->tablepara($this->attribute_values);
        // }
        // $this->varaintadata = ProductVariant::where('product_id',$product->id)->get();
        //dd( $this->varaintadata);
        $this->productvariant = Product2::where('parent_id', $product->id)->orwhere('id',$product->id)->get();
       // dd( $this->productvariant);
        foreach($this->productvariant as $key=> $tdata)
        {
            $this->skus[$key] = $tdata->SKU;
            $this->mrps[$key] = $tdata->regular_price;
            $this->pris[$key] = $tdata->sale_price;
            $this->qtyes[$key] = $tdata->quantity;
            $this->bulkqtys[$key] = $tdata->bulk_quantity;
            $this->bulkrates[$key] = $tdata->bulk_rate;
          
        }
       // dd($this->skus);
    //    $this->productvariant = Product2::where('parent_id', $product->id)->get();

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
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
            //'image'=>'required|mimes:jpeg,jpg,png',
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
            'freecancellation' =>'required',
            'slug' => 'required|unique:product2s,slug,'.$this->product_id.'',
        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage'=>'required|mimes:jpeg,jpg,png',
            ]);
        }
        if($this->newquantity)
        {
            $this->validateOnly($fields,[
                'newquantity'=>'required|numeric',
            ]);
        }
    }

    public function updateProduct()
    {
        //dd((($this->regular_price - $this->sale_price)/$this->regular_price)*100);
        //dd($this->newqtyes);
        $this->validate([
            'name' => 'required',
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
            //'image'=>'required|mimes:jpeg,jpg,png',
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
            'freecancellation' =>'required', 
            'slug' => 'required|unique:product2s,slug,'.$this->product_id.'',
        ]);

        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:jpeg,jpg,png',
            ]);
        }
        if($this->newquantity)
        {
            $this->validate([
                'newquantity'=>'required|numeric',
            ]);
        }

        $product = Product2::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description =  $this->short_description;
        $product->description = $this->description;
        $product->regular_price= $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->bulk_quantity= $this->bulk_quantity;
        $product->bulk_rate = $this->bulk_rate;
        $product->SKU = $this->SKU;
        // dd('gfdd');
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity + $this->newquantity;
        if($this->newimage){
            unlink('admin/product/feat'.'/'.$product->image);
            $imageName= Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('product/feat',$imageName);
            $product->image = $imageName;
        }
        if($this->newimages)
        {
            if($product->images)
            {
                $images = explode(",",$product->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                       // unlink('admin/product'.'/'.$image);
                    }
                }
            }
            $imagesname = '';
            foreach($this->newimages as $key=>$image)
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
        $product->tax_id = $this->tax_id;
        $product->freecancellation = $this->freecancellation;
        $product->additional_info = $this->additional_info;
        $product->meta_keywords = $this->meta_keywords;
        $product->meta_description = $this->meta_description;
        $product->cod = $this->cod;
        $product->refund = $this->refund;
         $product->disease_id = json_encode($this->disease_id);
        $product->discount_value = round((($this->regular_price - $this->sale_price)/$this->regular_price)*100,2);
        
        $product->save();

        if($this->newquantity){
            $prqty = new ProductQuantity();
            $prqty->product_id = $product->id;
            $prqty->quantity = $this->newquantity;
            $prqty->save();
        }
     
       
        $j=1;
        foreach($this->productvariant as $key => $tdata)
        {
            if($key == 0){

                 }else{
            $product_varaint = Product2::find($tdata->id);
            $product_varaint->name = $this->name;
            $product_varaint->slug = $this->slug.'-'.$tdata->varaint_detail;
            $product_varaint->short_description =  $this->short_description;
            $product_varaint->description = $this->description;
            $product_varaint->regular_price= $this->mrps[$key];
            $product_varaint->sale_price = $this->pris[$key];
            $product_varaint->bulk_quantity= $this->bulkqtys[$key];
            $product_varaint->bulk_rate = $this->bulkrates[$key];
            $product_varaint->SKU = $this->skus[$key];
            $product_varaint->stock_status = $this->stock_status;
            $product_varaint->featured = $this->featured;
            if(array_key_exists($key,$this->newqtyes)){
            $product_varaint->quantity = $this->qtyes[$key]+$this->newqtyes[$key];
            }else{
                $product_varaint->quantity = $this->qtyes[$key];
            }
            $product_varaint->image = $product->image;
            $product_varaint->images = $product->images;
            $product_varaint->category_id= $this->category_id;
            $product_varaint->subcategory_id = $this->scategory_id;
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
            $product_varaint->additional_info = $this->additional_info;
            $product_varaint->meta_keywords = $this->meta_keywords;
            $product_varaint->meta_description = $this->meta_description;
            $product_varaint->cod = $this->cod;
            $product_varaint->refund = $this->refund;
             $product_varaint->disease_id = json_encode($this->disease_id);
            $product_varaint->discount_value = round((($this->mrps[$key] - $this->pris[$key])/$this->mrps[$key])*100,2);
            $product_varaint->save();

            
            $j++;
            if(array_key_exists($key,$this->newqtyes)){
                $prqty = new ProductQuantity();
                $prqty->product_id = $product->id;
                $prqty->product_varaint_id = $product_varaint->id;
                $prqty->quantity = $this->newqtyes[$key];
                $prqty->save();
            }
            }
            

            

        }

        Session()->flash('message','Product has been Updated Successfully!');
    }

    public function render()
    {
        $categories=Category::where('status',1)->get();
        $scategories = SubCategory::where('category_id',$this->category_id)->where('statuts',1)->get();
        $attributes = Attribute::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $medtypes = MedType::where('status',1)->get();
        $taxs = Tax::where('status',1)->get();
        $diseases = Disease::where('status','!=',3)->get();
        return view('livewire.admin.product2.edit-product2-component',['diseases'=>$diseases,
            'categories'=>$categories,'scategories'=>$scategories,'attributes'=>$attributes,'brands'=>$brands,'medtypes'=>$medtypes,'taxs'=>$taxs
        ])->layout('layouts.admin');
    }
}
