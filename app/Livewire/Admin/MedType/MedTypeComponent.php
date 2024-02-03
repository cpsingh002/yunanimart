<?php

namespace App\Livewire\Admin\MedType;

use Livewire\Component;
use App\Models\MedType;

class MedTypeComponent extends Component
{
    public function DeactiveMedType($id)
    {
        $category = MedType::find($id);
        $category->status=0;
        $category->save();
        session()->flash('message','MedType has been Deactive successfully!');
        $this->js('window.location.reload()');
    }
    public function ActiveMedType($id)
    {
        $category = MedType::find($id);
        $category->status=1;
        $category->save();
        session()->flash('message','MedType has been Active successfully!');
        $this->js('window.location.reload()');
    }

    public function render()
    {
        $medtpyes = MedType::where('status','!=',3)->get();
        return view('livewire.admin.med-type.med-type-component',['medtpyes'=>$medtpyes])->layout('layouts.admin');
    }

    public function deleteMedType($id)
    {
        $category = MedType::find($id);
        $category->status=3;
        $category->save();
        session()->flash('message','Med Type has been deleted successfully!');
        $this->js('window.location.reload()');
    }
}
