<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'category_id');
    }

    public function productcount()
    {
        return $this->hasMany(Product2::class,'category_id');
    }
    public function banner(){
        return $this->hasMany(Banner::class,'for');
    }
}
