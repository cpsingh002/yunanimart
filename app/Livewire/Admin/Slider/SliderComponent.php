<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;
use App\Models\Slider;

class SliderComponent extends Component
{
    public function render()
    {
        $sliders = Slider::all();
        return view('livewire.admin.slider.slider-component',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
