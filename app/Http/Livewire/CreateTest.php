<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Auth;

use Livewire\Component;
use App\Models\Test;
use App\Models\SoalCategory;

class CreateTest extends Component
{
    public $judul,$jam,$menit,$detik,$passGrade,$sumQuestion;

    public function render()
    {
        return view('livewire.admin.create-test');
    }

    /**
     * Redirect to create soal section
     * After saving the test title
     */
    public function saveTest()
    {
        $hour = Carbon::createFromFormat('H',$this->jam)->format('H:i:s');
        $saveTest = Test::updateOrCreate(
                    [
                        'creator_id' => Auth::user()->id,
                        'title' => $this->judul,
                    ],
                    [
                        'duration'   => $hour,
                        'pass_grade' => $this->passGrade,
                        'total_questions' => $this->sumQuestion,
                    ]);

        $this->emit('title_id',$saveTest->id);
        return redirect()->route('create-soal',['title_id'=>$saveTest->id]);

    }
}
