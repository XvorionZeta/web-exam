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

    public function mount()
    {
        // $this->jam = 0;
        // $this->menit = 0;
        // $this->detik = 0;
    }

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
        $hour = Carbon::createFromFormat('H',$this->jam);
        $minute = Carbon::createFromFormat('i',$this->menit < 10 ? "0".$this->menit : $this->menit)->format('i');
        $second = Carbon::createFromFormat('s',$this->detik < 10 ? "0".$this->detik : $this->detik)->format('s');

        $time = $hour->addMinutes($minute)
                     ->addSeconds($second)
                     ->format('H:i:s');
        // dd($time);
        $saveTest = Test::updateOrCreate(
                    [
                        'creator_id' => Auth::user()->id,
                        'title' => $this->judul,
                    ],
                    [
                        'duration'   => $time,
                        'pass_grade' => $this->passGrade,
                        'total_questions' => $this->sumQuestion,
                    ]);

        $this->emit('title_id',$saveTest->id);
        return redirect()->route('create-soal',['title_id'=>$saveTest->id]);

    }
}
