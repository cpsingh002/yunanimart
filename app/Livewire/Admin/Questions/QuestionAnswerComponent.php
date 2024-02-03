<?php

namespace App\Livewire\Admin\Questions;

use Livewire\Component;
use App\Models\Question;

class QuestionAnswerComponent extends Component
{
    public function DeactiveQuestion($id)
    {
        $question = Question::find($id);
        $question->status=0;
        $question->save();
        session()->flash('message','Question has been Deactive successfully!');
        $this->js('window.location.reload()');
    }
    public function ActiveQuestion($id)
    {
        $question = Question::find($id);
        $question->status=1;
        $question->save();
        session()->flash('message','Question has been Active successfully!');
        $this->js('window.location.reload()');
    }
    public function deleteQuestion($id)
    {
        $question = Question::find($id);
        $question->status=3;
        $question->save();
        session()->flash('message','Question has been deleted successfully!');
        $this->js('window.location.reload()');
    }
    public function render()
    {
        $questions=Question::all();
        return view('livewire.admin.questions.question-answer-component',['questions'=>$questions])->layout('layouts.admin');
    }
}
