<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;
class BannerComponent extends Component
{
    public function render()
    {
        $sliders = Banner::all();
        return view('livewire.admin.banner.banner-component',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
