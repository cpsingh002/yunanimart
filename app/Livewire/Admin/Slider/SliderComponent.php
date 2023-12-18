<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;

class SliderComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.slider.slider-component')->layout('layouts.admin');
    }
}
