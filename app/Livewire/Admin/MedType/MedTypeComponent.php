<?php

namespace App\Livewire\Admin\MedType;

use Livewire\Component;
use App\Models\MedType;

class MedTypeComponent extends Component
{

    public function render()
    {
        $medtpyes = MedType::all();
        return view('livewire.admin.med-type.med-type-component',['medtpyes'=>$medtpyes])->layout('layouts.admin');
    }

    public function deleteMedType($id)
    {
        $category = MedType::find($id);
        $category->delete();
        session()->flash('message','Med Type has been deleted successfully!');
    }
}
