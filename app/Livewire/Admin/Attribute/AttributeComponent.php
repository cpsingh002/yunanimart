<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;
use App\Models\Attribute;

class AttributeComponent extends Component
{
    public function render()
    {
        $attributes = Attribute::all(); 
        return view('livewire.admin.attribute.attribute-component',['attributes'=>$attributes])->layout('layouts.admin');;
    }

    public function deleteAttribute($id)
    {
        $category = Attribute::find($id);
        $category->delete();
        session()->flash('message','Attribute has been deleted successfully!');
    }
}
