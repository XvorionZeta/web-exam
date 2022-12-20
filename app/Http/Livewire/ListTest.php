<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\TestQuestion;

class ListTest extends Component
{
    use WithPagination;
    protected $queryString = ['search'];
    public $search;
    public $title,$testId;
    private $data;

    public function render()
    {
        $this->data();

        return view('livewire.admin.list-test',[
            'data' => $this->data
        ]);
    }

    public function data()
    {
       $this->data = Test::where('creator_id',Auth::user()->id)
                        ->whereLike(['title','duration','pass_grade','total_questions'],$this->serach ?? '')
                        ->orderBy('updated_at')
                        ->paginate('25');
    }

    public function listSoal($idTest)
    {
        return redirect()->route('list-soal',['test_id'=>$idTest]);
    }

    public function editTest($id)
    {
        $this->testid = $id;
        $this->title  = Test::where('id',$id)->value('title');
    }

}
