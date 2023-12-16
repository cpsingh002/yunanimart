<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.blog-details-component')->layout('layouts.main');
    }
}
