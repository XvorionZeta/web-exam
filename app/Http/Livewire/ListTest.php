<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\TestQuestion;

class ListTest extends Component
{
    public function render()
    {
        return view('livewire.admin.list-test');
    }

    public function testJoin()
    {

    }

}
