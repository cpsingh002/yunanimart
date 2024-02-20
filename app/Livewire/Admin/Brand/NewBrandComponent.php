<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
class NewBrandComponent extends Component
{
    public function DeactiveBrand($id)
    {
        $category = Brand::find($id);
        $category->status=0;
        $category->save();
        session()->flash('message','Brand has been Deactive successfully!');
        $this->js('window.location.reload()');
    }
    public function ActiveBrand($id)
    {
        $category = Brand::find($id);
        $category->status=1;
        $category->save();
        session()->flash('message','Brand has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deleteBrand($id)
    {
        $category = Brand::find($id);
        $category->status=3;
        $category->save();
        session()->flash('message','Brand has been deleted successfully!');
       // $this->js('window.location.reload()');
    }
    public function render()
    {
        $brands = Brand::where('status','!=',3)->get();
        return view('livewire.admin.brand.new-brand-component',['brands' =>$brands])->layout('livewire.layouts.base');
    }
}
