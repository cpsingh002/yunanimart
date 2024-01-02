<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class UploadPrescriptionComponent extends Component
{
    use WithFileUploads;
    public $prescription;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'prescription'=>'required|mimes:jpeg,jpg,png,pdf'
        ],[
            'prescription.mimes'=>'Upload file type must bhi in JPE, PNG nad Pdf only'
        ]);
    }

    public function UploadPresc()
    {
        $this->validate(['prescription'=>'required|mimes:jpeg,jpg,png,pdf']);

        $slider = new Prescription();
        
        $slider->user_id = Auth::user()->id;
        $slider->status = '1';
        $slider->current_status = 'packing';
        $imageName= Carbon::now()->timestamp.'.'.$this->prescription->extension();
        $this->prescription->storeAs('prescription',$imageName);
        $slider->prescription_file = $imageName;

        $slider->save();
        Session()->flash('message','File has been Uploaded Successfully!');
    }
    public function render()
    {

        return view('livewire.frontend.upload-prescription-component')->layout('layouts.main');
    }
}
