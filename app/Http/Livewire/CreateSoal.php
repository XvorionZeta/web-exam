<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Test;
use App\Models\TestQuestion;
use App\Models\TestAnswer;

class CreateSoal extends Component
{
    public $answers = [''];
    public $saved = FALSE;
    public $question,$questionId,$isRight,$title,$testId;

    public function mount($title_id)
    {
        $this->testId = $title_id;
        $this->title  = Test::where('id',$title_id)->value('title');
    }

    public function render()
    {
        return view('livewire.admin.create-soal');
    }

    public function addAnswer()
    {
        $this->answers[] = '';
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
        $answers  = TestAnswer::create();

        foreach ($this->answers as $answer)
        {
            $answers->answer()->create([
                'question_id' => $this->questionId,
                'answer' => $answer
            ]);
        }
    }

    // public function title_id($title_id)
    // {
    //     $this->title = $title_id;
    // }
}
