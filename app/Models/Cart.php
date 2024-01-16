<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table="carts";
    public function product()
    
    {
        return $this->belongsTo(Product2::class,'product_id');
    }

}
