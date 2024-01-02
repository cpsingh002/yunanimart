<?php

namespace App\Livewire\Admin\Prescription;

use Livewire\Component;
use App\Models\Prescription;

class PrescriptionComponent extends Component
{
    public function render()
    {   
        $prescriptions= Prescription::all();
        return view('livewire.admin.prescription.prescription-component',['prescriptions'=>$prescriptions])->layout('layouts.admin');
    }
}
