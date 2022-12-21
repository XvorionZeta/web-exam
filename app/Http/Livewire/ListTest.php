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
    public $editContent;
    public $deleted = FALSE;
    public $judul,$jam,$menit,$detik,$passGrade,$sumQuestion;
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

    public function assignTest($idTest)
    {
        return redirect()->route('assign-test',['test_id'=>$idTest]);
    }

    public function editTest($id)
    {
        $this->testId = $id;
        $this->title  = Test::where('id',$id)->value('title');
        $this->passGrade   = Test::where('id',$id)->value('pass_grade');
        $this->sumQuestion = Test::where('id',$id)->value('total_questions');
    }

    public function update()
    {
        Test::where('id',$this->testId)
            ->update([
                'title' => $this->title,
                'pass_grade' => $this->passGrade,
                'total_questions' => $this->sumQuestion
            ]);
    }

    public function delete($testId)
    {
        Test::where('id',$testId)->delete();
        $this->deleted = true;
    }
}
