<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class UploadPrescriptionComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.upload-prescription-component')->layout('layouts.main');
    }
}
