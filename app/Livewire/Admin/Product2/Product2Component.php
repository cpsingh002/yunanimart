<?php

namespace App\Livewire\Admin\Product2;

use Livewire\Component;
use App\Models\Product2;

class Product2Component extends Component
{
    public function render()
    {
        $products=Product2::whereNull('parent_id')->get();
        return view('livewire.admin.product2.product2-component',['products'=>$products])->layout('layouts.admin');
    }
}
