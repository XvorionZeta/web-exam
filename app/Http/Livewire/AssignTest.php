<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\TestQuestion;
use App\Models\UserTest;

class AssignTest extends Component
{
    public $testId,$testTitle;

    public function mount($test_id)
    {
        $this->testId = $test_id;
        $this->testTitle = Test::where('id',$test_id)->value('title');
    }

    public function render()
    {
        return view('livewire.admin.assign-test',[
            'title' => $this->testTitle
        ]);
    }
}
