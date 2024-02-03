<?php

namespace App\Livewire\Admin\Product2;

use Livewire\Component;
use App\Models\Product2;

class Product2Component extends Component
{
    public function DeactiveProduct($id)
    {
        $category = Product2::find($id);
        $category->status=0;
        $category->save();
        session()->flash('message','Product has been Deactive successfully!');
        $this->js('window.location.reload()');
    }
    public function ActiveProduct($id)
    {
        $category = Product2::find($id);
        $category->status=1;
        $category->save();
        session()->flash('message','Product has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deleteProduct($id)
    {
        $category = Product2::find($id);
        $category->status=3;
        $category->save();
        session()->flash('message','Product has been deleted successfully!');
        $this->js('window.location.reload()');
    }
    public function render()
    {
        $products=Product2::whereNull('parent_id')->where('status','!=',3)->get();
        return view('livewire.admin.product2.product2-component',['products'=>$products])->layout('layouts.admin');
    }
}
