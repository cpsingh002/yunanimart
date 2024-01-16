<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\Category;
use App\Models\SubCategory;

class NavBarComponent extends Component
{
    public function render()
    {
        $categorys = Category::all();
        $subcategorys = SubCategory::all();
        return view('livewire.nav-bar-component',['categorys'=>$categorys,'subcategorys'=>$subcategorys]);
    }
}
