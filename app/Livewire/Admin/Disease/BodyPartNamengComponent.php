<?php

namespace App\Livewire\Admin\Disease;

use Livewire\Component;
use App\Models\DiseaseBodyPart;
use Illuminate\Support\Str;

class BodyPartNamengComponent extends Component
{
    public $name, $slug, $description, $status;
    public $bodypart_id, $bodypart_delete_id;
   

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function render()
    { 
        $bodyparts = DiseaseBodyPart::where('status','!=',3)->get();
        return view('livewire.admin.disease.body-part-nameng-component',['bodyparts'=>$bodyparts])->layout('layouts.admin');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required', //Validation with ignoring own data
            'slug' => 'required|unique:disease_body_parts',
            'status'=>'required',
            'description' =>'required',
        ]);
    }

    public function storeBodyPart()
    {
        //on form submit validation
        $this->validate([
            'name' => 'required', //Validation with ignoring own data
            'slug' => 'required|unique:disease_body_parts',
            'status'=>'required',
            'description' =>'required',
        ]);

        //Add Data into Post table Data
        $post = new DiseaseBodyPart();
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->description = $this->description;
        $post->save();
        session()->flash('message', 'New Body Part addedd Successfully.');     
        $this->resetInputs();
        //For hide modal after add posts success
        $this->dispatch ('close-modal');
    }


    public function resetInputs()
    {
        $this->name = '';
        $this->slug = '';
        $this->description='';
        
        $this->status = '';
        $this->bodypart_id = '';
    }
    public function close()
    {
        $this->resetInputs();
        $this->js('window.location.reload()');
    }
    public function editPost($id)
    {
        $post = DiseaseBodyPart::find($id);

        $this->bodypart_id = $post->id;
        $this->name = $post->name;
        $this->slug = $post->slug;
        $this->description = $post->description;
        $this->status= $post->status;
        
        $this->dispatch('show-edit-post-modal');
    }

    public function editPostData()
    {
        //dd($this->coupon_id);
        //on form submit validation
        $this->validate([
            'slug' => 'required|unique:disease_body_parts,slug,'.$this->bodypart_id.'', //Validation with ignoring own data
            'name' => 'required',
            'description'=>'required',
            'status' => 'required'
        ]);

        $post = DiseaseBodyPart::find($this->bodypart_id);
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->description = $this->description;
        $post->save();

        session()->flash('message', 'Body part has been updated successfully');

        //For hide modal after add post added successfully
        $this->dispatch('close-modal');
        $this->js('window.location.reload()');
    }

    public function DeactivePart($id)
    {
        $disease = DiseaseBodyPart::find($id);
        $disease->status=0;
        $disease->save();
        session()->flash('message','Body Part has been Deactive successfully!');
        $this->js('window.location.reload()');
    }

    public function ActivePart($id)
    {
        $disease = DiseaseBodyPart::find($id);
        $disease->status=1;
        $disease->save();
        session()->flash('message','Body Part has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deleteDisease($id)
    {
        $disease = DiseaseBodyPart::find($id);
        $disease->status=3;
        $disease->save();
        session()->flash('message','Body Part has been deleted successfully!');
        $this->js('window.location.reload()');
    }
}
