<?php

namespace App\Livewire\Admin\MedType;

use Livewire\Component;
use App\Models\MedType;
use Illuminate\Support\Str;

class AddMedTypeComponent extends Component
{
    public $medtype;
    public $medtype_slug;
    public $description;
    public $status;
    
    public function mount()
    {
        $this->status = 1;                            
                                                        
    }
    public function generateSlug()
    {
        $this->medtype_slug = Str::slug($this->medtype,'-');
    }
    public function updated($fields)
    {
        $this->validateonly($fields,[
             'medtype'=>'required',
             'medtype_slug'=>'required|unique:med_types',
             'description'=>'required',
             'status'=>'required',
            ]);
    }
    public function storeMedtype()
    {
        $this->validate([
            'medtype'=>'required',
            'medtype_slug'=>'required|unique:med_types',
            'description'=>'required',
            'status'=>'required',
        ]);

        $med =new MedType();
        $med->medtype= $this->medtype;
        $med->medtype_slug= $this->medtype_slug;
        $med->description= $this->description;
        $med->status= $this->status;
        $med->save();
        Session()->flash('message','MedType has been Created Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.med-type.add-med-type-component')->layout('layouts.admin');
    }
}
