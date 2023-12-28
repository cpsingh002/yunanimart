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
use App\Models\ProductQuantity;

class EditProductComponent extends Component
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
    public $newimages;
    public $newimage;
    public $product_id;
    public $varaintadata;
    public $newquantity;
    public $newqtyes=[];

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
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
        $this->product_id = $product->id;
        $this->inputs = $product->attributeValues->where('product_id',$product->id)->unique('attribute_id')->pluck('attribute_id');
        $this->attribute_arr = $product->attributeValues->where('product_id',$product->id)->unique('attribute_id')->pluck('attribute_id');
        
        foreach($this->attribute_arr as $a_arr)
        {
            $allAttributeValue = AttributeValue::where('product_id',$product->id)->where('attribute_id',$a_arr)->get()->pluck('value');
            $valueString = '';
            foreach($allAttributeValue as $value)
            {
                $valueString = $valueString . $value.',';
            }     
            $this->attribute_values[$a_arr] = rtrim($valueString,",");
        }
        //dd($this->attribute_values);
        if($this->attribute_values){
            $this->para =$this->tablepara($this->attribute_values);
        }
        $this->varaintadata = ProductVariant::where('product_id',$product->id)->get();
        //dd( $this->varaintadata);
        foreach($this->para as $key=> $tdata)
        {
            $this->skus[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_SKU;
            $this->mrps[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_regular_price;
            $this->pris[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_sale_price;
            $this->qtyes[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_quantity;
            $this->bulkqtys[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_bulkqty;
            $this->bulkrates[$key] = ProductVariant::where(['product_id'=> $product->id,'varaint_detail'=>$tdata])->first()->v_bulkrate;
          
        }
       // dd($this->skus);

    }

    public function tablepara($attribute_valuesf)
    {
        $number = sizeof($attribute_valuesf);
        $keysvalue = array_keys($attribute_valuesf);
        
        foreach($keysvalue as $kvalue)
        {
            $size[$kvalue] =  explode(",",$attribute_valuesf[$kvalue]);
            
        }
        if($number == 0){
            
            $para =[];
            return $para;
        }
        elseif($number == 1){
            foreach($size[$keysvalue[0]] as $namefd)
            {
                // if(trim($namefd," ") != null){
                    $para[] = $namefd;
                // }
            }
            return $para;
        }else{
        
            foreach($size[$keysvalue[0]] as $namesd)
            {
                foreach($size[$keysvalue[1]] as $namefd)
                {
                    // if(trim($namefd," ") != null){
                        $para[] = $namesd.','.$namefd;
                    // }
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
        if(!$this->attribute_arr->contains($this->attr))
        {
            $this->inputs->push($this->attr);
            $this->attribute_arr->push($this->attr);
        }
    }

    public function done()
    {
        //dd($this->attribute_values);
        $this->para =$this->tablepara($this->attribute_values);
        //dd($this->para);
        // dd($this->varaintadata);
        if(isset($this->varaintadata[0])){
        foreach($this->para as $key=> $tdata)
        {
            // dd(array());
            // dd(ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->pluck('v_SKU'),);
            $this->skus[$key] = ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->first()->v_SKU;
            $this->mrps[$key] = ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->first()->v_regular_price; 
            $this->pris[$key] = ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->first()->v_sale_price;
            $this->qtyes[$key] = ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->first()->v_quantity;
            $this->bulkqtys[$key] = ProductVariant::where(['product_id'=> $this->product_id,'varaint_detail'=>$tdata])->first()->v_bulkqty;
            $this->bulkrates[$key] = ProductVariant::where(['product_id'=> $this->product_id,'varaint_detail'=>$tdata])->first()->v_bulkrate;
      
        }
    }

    }
    public function remove($attr,$value)
    {
        unset($this->inputs[$attr]);
        unset($this->attribute_values[$value]);
        $this->para =$this->tablepara($this->attribute_values);
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
            'slug' => 'required|unique:products,slug,'.$this->product_id
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
            'slug' => 'required|unique:products,slug,'.$this->product_id
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

        $product = Product::find($this->product_id);
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
                        unlink('admin/product'.'/'.$image);
                    }
                }
            }
            $imagesname = '';
            foreach($this->newimages as $key=>$image)
            {
                $imgName= Carbon::now()->timestamp.'.'.$image->extension();
                $image->storeAs('products',$imgName);
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
        $product->save();

        if($this->newquantity){
            $prqty = new ProductQuantity();
            $prqty->product_id = $product->id;
            $prqty->quantity = $this->newquantity;
            $prqty->save();
        }
        
         //dd($this->attribute_values);
        //AttributeValue::where('product_id',$product->id)->delete();
        // foreach($this->attribute_values as $key=>$attribute_value)
        // {
        //     $avalues = explode(",",$attribute_value);
        //     foreach($avalues as $avalue)
        //     { 
        //         $dfd = AttributeValue::where('product_id',$product->id)->where('value',$avalue)->first();
        //         dd($dfd);
        //         if($dfd){

        //         }else{
        //             $attr_value = new AttributeValue();
        //             $attr_value->attribute_id = $key;
        //             $attr_value->value = $avalue;
        //             $attr_value->product_id = $product->id;
        //             $attr_value->save();
        //         }
                
        //     }
        // }
        // product varinat portion
        // delete images form serve
            $varaintdelye = ProductVariant::where('product_id',$product->id)->get();
           // if($varaintdelye)
            //dd( $this->varaintadata);
            
        //}
           
         //delte record from database
        //ProductVariant::where('product_id',$product->id)->delete();
        // insert new record to databse 
        $j=1;
        foreach($this->para as $key => $tdata)
        {
            $PVG = ProductVariant::where(['product_id'=>  $this->product_id,'varaint_detail'=>$tdata])->first();
            //dd($PVG);
            if(isset($PVG)){
                $PVG->v_SKU = $this->skus[$key];
                $PVG->v_regular_price = $this->mrps[$key];
                $PVG->v_sale_price = $this->pris[$key];
                if(array_key_exists($key,$this->newqtyes)){
                $PVG->v_quantity = $this->qtyes[$key]+ $this->newqtyes[$key];
                }else{
                    $PVG->v_quantity = $this->qtyes[$key];
                }
                $PVG->v_bulkqty = $this->bulkqtys[$key];
                $PVG->v_bulkrate = $this->bulkrates[$key];
                $PVG->v_stock_status = 'instock';
                $PVG->save();


            }else{
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
                $product_varaint->save();
            }
           

            
            $j++;

            

            if(array_key_exists($key,$this->newqtyes)){
                $prqty = new ProductQuantity();
                $prqty->product_id = $product->id;
                $prqty->product_varaint_id = $PVG->id;
                $prqty->quantity = $this->newqtyes[$key];
                $prqty->save();
            }

        }

        Session()->flash('message','Product has been Updated Successfully!');
    }

    public function render()
    {
        $categories=Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $attributes = Attribute::all();
        $brands = Brand::all();
        $medtypes = MedType::all();
        return view('livewire.admin.product.edit-product-component',[
            'categories'=>$categories,'scategories'=>$scategories,'attributes'=>$attributes,'brands'=>$brands,'medtypes'=>$medtypes
        ])->layout('layouts.admin');
    }


}
