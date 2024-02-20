<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class NavBarComponent extends Component
{
    public function render()
    {
        $categorys = Category::where('status',1)->where('is_home',1)->get();
        // $subcategorys = SubCategory::all();
        return view('livewire.nav-bar-component',['categorys'=>$categorys]);
    }
}
