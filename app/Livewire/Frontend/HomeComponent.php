<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Slider;
use App\models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Product2;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Slider::where('for','home')->first();
        $categorys = Category::where('is_home',1)->get();
        $subcategorys = SubCategory::where('is_home',1)->get();
        $brands = Brand::where('is_home',1)->get();
        $banners = Banner::where('for',1)->get();
        $products = Product2::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
       // dd($sliders); 
        return view('livewire.frontend.home-component',['sliders'=>$sliders,'categorys'=>$categorys,'subcategorys'=>$subcategorys,
        'brands'=>$brands,'banners'=>$banners,'products'=>$products])->layout('layouts.main');
    }
}
