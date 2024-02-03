<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;

class BrandComponent extends Component
{
    public function render()
    {
        $brands = Brand::where('status','!=',3)->get();
        return view('livewire.frontend.brand-component',['brands' =>$brands])->layout('layouts.main');
    }
}
