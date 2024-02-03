<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class AboutUsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.about-us-component')->layout('layouts.main');
    }
}
