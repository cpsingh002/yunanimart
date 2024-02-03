<?php

namespace App\Livewire\Admin\Questions;
use App\Models\Question;
use App\Models\Answer;
use Livewire\Component;

class AllAnswersComponent extends Component
{
    public $question_id;
    public function  mount($id)
    {
        $this->question_id = $id;

    }
    public function render()
    {
        $question = Question::where('id',$this->question_id)->first();
        $answers = Answer::where('question_id',$question->id)->get();
        return view('livewire.admin.questions.all-answers-component',['question'=>$question,'answers'=>$answers])->layout('layouts.admin');;
    }
}
