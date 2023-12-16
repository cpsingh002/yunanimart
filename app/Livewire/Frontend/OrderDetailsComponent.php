<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.order-details-component')->layout('layouts.main');
    }
}
