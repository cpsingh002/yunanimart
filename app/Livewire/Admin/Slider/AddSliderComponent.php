<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;

class AddSliderComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.slider.add-slider-component')->layout('layouts.admin');
    }
}
