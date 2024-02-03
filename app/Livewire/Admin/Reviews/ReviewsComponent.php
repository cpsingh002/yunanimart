<?php

namespace App\Livewire\Admin\Reviews;

use Livewire\Component;
use App\Models\review;

class ReviewsComponent extends Component
{
    public function VerifyReview($id){
        $review=Review::find($id);
        $review->verified=1;
        $review->save();
        session()->flash('message','Review has been Verified successfully!');
        $this->js('window.location.reload()');
    }

    public function render()
    {
        $reviews=Review::where('verified',0)->get();
        return view('livewire.admin.reviews.reviews-component',['reviews'=>$reviews])->layout('layouts.admin');
    }
}
