<?php

namespace App\Livewire\Admin\MedType;

use Livewire\Component;
use App\Models\MedType;
use Illuminate\Support\Str;

class EditMedTypeComponent extends Component
{
    public $medtype;
    public $medtype_slug;
    public $description;
    public $status;
    public $medtype_id;

    public function mount($m_id)
    {
        $med = MedType::find($m_id);
        $this->medtype_id = $med->id;
        $this->medtype= $med->medtype;
        $this->medtype_slug= $med->medtype_slug;
        $this->description= $med->description;
        $this->status= $med->status;
        
    }
    public function generateSlug()
    {
        $this->medtype_slug = Str::slug($this->medtype,'-');
    }
    public function updated($fields)
    {
        $this->validateonly($fields,[
            'medtype'=>'required',
            'description'=>'required',
            'status'=>'required',
            'medtype_slug' => 'required|unique:med_types,medtype_slug,'.$this->medtype_id
        ]);
        
    }

    public function updateMedtype()
    {
        $this->validate([
            'medtype'=>'required',
            'description'=>'required',
            'status'=>'required',
            'medtype_slug' => 'required|unique:med_types,medtype_slug,'.$this->medtype_id
        ]);
       

        $med = MedType::find($this->medtype_id);
        
        $med->medtype= $this->medtype;
        $med->medtype_slug= $this->medtype_slug;
        $med->description= $this->description;
        $med->status= $this->status;
        $med->save();
        session()->flash('message','MedType has been upadted successfully !');
    }
    public function render()
    {
        return view('livewire.admin.med-type.edit-med-type-component')->layout('layouts.admin');
    }
}
