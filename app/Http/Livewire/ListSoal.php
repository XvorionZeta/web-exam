<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\TestQuestion;

class ListSoal extends Component
{
    use WithPagination;

    public $testId,$title;
    public $search;
    private $data;
    protected $queryString = ['search'];

    public function mount($test_id)
    {
        $this->testId = $test_id;
        $this->title  = Test::where('id',$test_id)->value('title');
    }

    public function render()
    {   $this->data();

        return view('livewire.admin.list-soal',[
            'title' => $this->title,
            'data'  => $this->data
        ]);
    }

    public function data()
    {
       $this->data = TestQuestion::where('test_id',$this->testId)
                                ->whereLike(['question'],$this->serach ?? '')
                                ->orderBy('updated_at')
                                ->paginate('25');
    }
}
