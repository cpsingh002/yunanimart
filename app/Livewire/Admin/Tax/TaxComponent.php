<?php

namespace App\Livewire\Admin\Tax;

use Livewire\Component;
use App\Models\Tax;

class TaxComponent extends Component
{
    public function render()
    {
        $taxs = Tax::all();
        return view('livewire.admin.tax.tax-component',['taxs'=>$taxs])->layout('layouts.admin');
    }
}
