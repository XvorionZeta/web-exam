<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Test;
use App\Models\TestQuestion;
use App\Models\TestAnswer;

class CreateSoal extends Component
{
    public $answers = [''];
    public $isRight = [false];
    public $saved = FALSE;
    public $question,$questionId,$title,$testId;

    public function mount($title_id)
    {
        $this->testId  = $title_id;
        // $this->isRight = false;
        $this->title  = Test::where('id',$title_id)->value('title');
    }

    public function render()
    {
        return view('livewire.admin.create-soal');
    }

    public function addAnswer()
    {
        $this->answers[] = '';
        $this->isRight[] = false;
        $this->saved = false;
    }

    public function removeAnswer($index)
    {
        unset($this->answers[$index]);
        $this->answers = array_values($this->answers);
    }

    public function saveQuestion()
    {
        $question = TestQuestion::updateOrcreate(
            ['question' => $this->question],
            [
                'test_id' => $this->testId
            ]
        );
        $this->questionId = $question->id;
        // dd();
        foreach (array_combine($this->answers,$this->isRight) as $answer => $isRight)
        {
            TestAnswer::updateOrCreate(
                [
                    'question_id' => $this->questionId,
                    'answer' => $answer
                ],
                [
                    'is_right'    => $isRight,
                ]
            );
        }
        $this->reset('question','answers','isRight');
        $this->saved = TRUE;
    }

    // public function title_id($title_id)
    // {
    //     $this->title = $title_id;
    // }
}
