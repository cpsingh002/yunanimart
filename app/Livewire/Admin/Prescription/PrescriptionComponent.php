<?php

namespace App\Livewire\Admin\Prescription;

use Livewire\Component;
use App\Models\Prescription;

class PrescriptionComponent extends Component
{
    public function DeactivePrescription($id)
    {
        $category = Prescription::find($id);
        $category->status=0;
        $category->save();
        session()->flash('message','Prescription has been Deactive successfully!');
        $this->js('window.location.reload()');
    }
    public function ActivePrescription($id)
    {
        $category = Prescription::find($id);
        $category->status=1;
        $category->save();
        session()->flash('message','Prescription has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deletePrescription($id)
    {
        $category = Prescription::find($id);
        $category->status=3;
        $category->save();
        session()->flash('message','Prescription has been deleted successfully!');
        $this->js('window.location.reload()');
    }
    public function render()
    {   
        $prescriptions= Prescription::where('status','!=',3)->get();
        return view('livewire.admin.prescription.prescription-component',['prescriptions'=>$prescriptions])->layout('layouts.admin');
    }
}
