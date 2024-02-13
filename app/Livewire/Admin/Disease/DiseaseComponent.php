<?php

namespace App\Livewire\Admin\Disease;

use Livewire\Component;
use App\Models\Disease;
use App\Models\DiseaseBodyPart;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class DiseaseComponent extends Component
{
    use WithFileUPloads;
    public $name, $slug, $image, $description, $status,$bodypart_id;
    public $disease_id, $newimage;
    
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function render()
    {
        $diseases = Disease::where('status','!=',3)->get();
        $bodyparts = DiseaseBodyPart::where('status','!=',3)->get();
        return view('livewire.admin.disease.disease-component',['bodyparts'=>$bodyparts,'diseases'=>$diseases])->layout('layouts.admin');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required', //Validation with ignoring own data
            'slug' => 'required|unique:diseases',
            'status'=>'required',
            'description' =>'required',
            'bodypart_id'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage'=>'required|mimes:jpeg,jpg,png',
            ]);
        }
    }

    public function storeBodyPart()
    {
        //on form submit validation
        $this->validate([
            'name' => 'required', //Validation with ignoring own data
            'slug' => 'required|unique:diseases',
            'status'=>'required',
            'description' =>'required',
            'bodypart_id'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);

        //Add Data into Post table Data
        $post = new Disease();
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->description = $this->description;
        $post->bodypart_id = $this->bodypart_id;
        if($this->image){
            $imageName= Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('disea',$imageName);
            $post->image = $imageName;
        }

        $post->save();
        session()->flash('message', 'New Disease addedd Successfully.');     
        $this->resetInputs();
        //For hide modal after add posts success
        $this->dispatch ('close-modal');
        $this->js('window.location.reload()');
    }


    public function resetInputs()
    {
        $this->name = '';
        $this->slug = '';
        $this->description='';
        $this->image = '';
        $this->newimage = '';
        $this->status = '';
        $this->bodypart_id = '';
        $this->disease_id = '';
    }
    public function close()
    {
        $this->resetInputs();
    }
    public function editPost($id)
    {
        $post = Disease::find($id);

        $this->disease_id = $post->id;
        $this->name = $post->name;
        $this->slug = $post->slug;
        $this->description = $post->description;
        $this->status= $post->status;
        $this->bodypart_id = $post->bodypart_id;
        $this->image = $post->image;
        
//dd($this->coupon_id);
        $this->dispatch('show-edit-post-modal');
    }

    public function editPostData()
    {
        //dd($this->coupon_id);
        //on form submit validation
        $this->validate([
            'slug' => 'required|unique:diseases,slug,'.$this->disease_id.'', //Validation with ignoring own data
            'name' => 'required',
            'description'=>'required',
            'status' => 'required',
            'bodypart_id'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:jpeg,jpg,png',
            ]);
        }

        $post = Disease::find($this->disease_id);
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->description = $this->description;
        $post->bodypart_id = $this->bodypart_id;
        if($this->newimage){
            $imageName= Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('disea',$imageName);
            $post->image = $imageName;
        }
        $post->save();
       

        session()->flash('message', 'Disease has been updated successfully');

        //For hide modal after add post added successfully
        $this->dispatch('close-modal');
    }

    public function DeactivePart($id)
    {
        $disease = Disease::find($id);
        $disease->status=0;
        $disease->save();
        session()->flash('message','Disease has been Deactive successfully!');
        $this->js('window.location.reload()');
    }

    public function ActivePart($id)
    {
        $disease = Disease::find($id);
        $disease->status=1;
        $disease->save();
        session()->flash('message','Disease has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deleteDisease($id)
    {
        $disease = Disease::find($id);
        $disease->status=3;
        $disease->save();
        session()->flash('message','Disease has been deleted successfully!');
        $this->js('window.location.reload()');
    }
}
