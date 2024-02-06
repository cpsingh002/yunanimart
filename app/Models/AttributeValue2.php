<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue2 extends Model
{
    use HasFactory;
    protected $table = "attribute_value2s";
    
    public function productAttribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id');
    }
}
