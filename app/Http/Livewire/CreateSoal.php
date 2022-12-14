<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Test;
use App\Models\TestQuestions;
use App\Models\TestAnswer;

class CreateSoal extends Component
{
    public $answers = [''];
    public $saved = FALSE;
    public $question,$isRight,$title;
    protected $listeners = ['title_id'];

    public function render()
    {
        return view('livewire.admin.create-soal',[
            'title' => $this->title,
        ]);
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
        $question = TestQuestion::updateOrcreate();
        $answers  = TestAnswer::updateOrCreate();
    }
    public function title_id($title_id)
    {
        $this->title = $title_id;
    }
}
