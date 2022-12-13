<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Auth;

use Livewire\Component;
use App\Models\Test;
use App\Models\SoalCategory;

class CreateTest extends Component
{
    public $judul,$jam,$menit,$detik,$passGrade;

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
        Carbon::createFromFormat('H',$this->jam)->format('H:i:s');
        Test::updateOrCreate(
            ['creator_id' => Auth::user()->id],
            [

            ]
            );
    }
}
