<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    use HasFactory;
    protected $table = "product2s";

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subCategories()
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id');
    }
    public function MedTypes()
    {
        return $this->belongsTo(MedType::class,'medtype_id');
    }
    public function attributeValues()
    {
        return $this->hasOne(AttributeValue2::class,'product_id')->get();
    }
    
    public function taxslab()
    {
        return $this->belongsTo(Tax::class,'tax_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function reviews()
    {
        return $this->hasMany(review::class,'product_id')->where('verified',1)->where('status',1);
    }
}
