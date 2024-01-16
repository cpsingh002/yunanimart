<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveForLater extends Model
{
    use HasFactory;
    public function product()
    
    {
        return $this->belongsTo(Product2::class,'product_id');
    }
}
