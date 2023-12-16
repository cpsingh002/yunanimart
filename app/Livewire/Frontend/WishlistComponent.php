<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class WishlistComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.wishlist-component')->layout('layouts.main');
    }
}
