<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Slider;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Product2;

class HomeComponent extends Component
{
    public function c_details($sid){

        return Category::where('id',$sid)->first();
    }
    public function render()
    {
        $sliders = Slider::where('for','home')->where('status',1)->get();
        $categorys = Category::where('is_home',1)->where('status',1)->get();
        $subcategorys = SubCategory::where('is_home',1)->where('statuts',1)->get();
        $brands = Brand::where('is_home',1)->where('status',1)->get();
        $banners = Banner::where('for','home')->where('status',1)->get();
        $bannersd = Banner::where('for','!=','home')->pluck('for')->unique()->toArray();
       // dd($bannersd);
        $products = Product2::where('sale_price','>',0)->where('status',1)->where('featured',1)->inRandomOrder()->get()->take(8);
        $fproducts = Product2::where('sale_price','>',0)->where('status',1)->where('featured',1)->inRandomOrder()->get()->take(8);
        $category_banner = Banner::where('for','!=','home')->pluck('for')->unique();
       // dd($sliders); 
        return view('livewire.frontend.home-component',['sliders'=>$sliders,'categorys'=>$categorys,'subcategorys'=>$subcategorys,
        'brands'=>$brands,'banners'=>$banners,'products'=>$products,'category_banner'=>$category_banner,'fproducts'=>$fproducts])->layout('layouts.main');
    }
}
