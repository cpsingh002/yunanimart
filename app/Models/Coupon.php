<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = "coupons";
     protected $fillable = [
        'coupon_name',
        'code',
        'type',
        'value'
     ];
    
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
