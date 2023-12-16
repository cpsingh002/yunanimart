<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class ContactUsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.contact-us-component')->layout('layouts.main');
    }
}
