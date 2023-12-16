<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class OrdersComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.orders-component')->layout('layouts.main');
    }
}
