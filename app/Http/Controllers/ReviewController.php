<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class ReviewController extends Controller
{
    public function activeReviews(){
        $reviews=Review::where('status',1)->where('verified',1)->get();
        // dd($reviews);
        return view('livewire.admin.reviews.active-reviews-component',['reviews'=>$reviews]);
    }

    public function deactiveReviews(){
        $reviews=Review::where('status',0)->where('verified',1)->get();
        // dd($reviews);
        return view('livewire.admin.reviews.deactive-reviews-component',['reviews'=>$reviews])->layout('layouts.admin1');
    }
    public function changeActive($id){
        $reviews=Review::find($id);
        $reviews->status=0;
        $reviews->save();
        return redirect()->back()->with('message', 'Status changed!');
    }
    public function changeDeactive($id){
        $reviews=Review::find($id);
        $reviews->status=1;
        $reviews->save();
        return redirect()->back()->with('message', 'Status changed!');
    }
}
