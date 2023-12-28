<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;
use App\Models\Slider;
use App\Models\Category;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class EditSliderComponent extends Component
{
    use WithFileUPloads;
    public $title;
    public $link;
    public $images;
    public $status;
    public $for;
    public $newimages;
    public $s_id;

     public  function mount($sid)
     {
        $slider = Slider::find($sid);
        $this->title = $slider->title;
        $this->link=$slider->link;
        $this->images = explode(",",$slider->images);
    
        $this->status=$slider->status;
        $this->for = $slider->for;
        $this->s_id = $slider->id;
       // dd($this->for);
     } 
      public function updateSlider()
      {
        $slider = Slider::find($this->s_id);
        $slider->title = $this->title;
        $slider->link = $this->link;
        $slider->status = $this->status;
        $slider->for = $this->for;
        if($this->newimages)
        {
            if($slider->images)
            {
                $images = explode(",",$slider->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('admin/slider'.'/'.$image);
                    }
                }
            }
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {
                $imgName = Carbon::now()->timestamp. $key.'.'.$image->extension();
                $image->storeAs('slider',$imgName);
                $imagesname = $imagesname.','.$imgName;
            }
            $slider->images = $imagesname;
        }

        $slider->save();
        Session()->flash('message','Slider has been Updated Successfully!');

      }
    public function render()
    {
        $categorys =  Category::all();
        return view('livewire.admin.slider.edit-slider-component',['categorys'=>$categorys])->layout('layouts.admin');
    }
}
