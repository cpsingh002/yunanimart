<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;

class BrandComponent extends Component
{
    public function deleteBrand($id)
    {
        $category = Brand::find($id);
        $category->delete();
        session()->flash('message','Brand has been deleted successfully!');
    }
    public function render()
    {
        $brands = Brand::all();
        return view('livewire.admin.brand.brand-component',['brands' =>$brands])->layout('layouts.admin');
    }
}
