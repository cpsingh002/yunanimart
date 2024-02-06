<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table= "brands";
    
    public function productcount()
    {
        return $this->hasMany(Product2::class,'brand_id');
    }
}
