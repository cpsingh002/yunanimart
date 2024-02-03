<?php

namespace App\Livewire\Admin\Questions;

use Livewire\Component;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Auth;

class QuestionComponent extends Component
{
    public $answer;
    public $qid;
    public $question;

    public function replyQuestion($id){
        $this->qid=$id;
        $this->dispatch('openanswerModal');
    }
    public function storeAnswer(){
        $que=Question::where('id',$this->qid)->first();
        $que->is_reply=1;
        $que->save();
        $ans=new Answer();
        $ans->question_id=$this->qid;
        $ans->ruser_id=Auth::id();
        $ans->answer=$this->answer;
        $ans->verified=1;
        $ans->save();
        Session()->flash('message','Answer has been Submited Successfully');
        $this->js('window.location.reload()');
    }
    public function render()
    {
        $questions=Question::where('is_reply',0)->get();
        return view('livewire.admin.questions.question-component',['questions'=>$questions])->layout('layouts.admin');
    }
}
