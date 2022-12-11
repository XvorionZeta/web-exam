<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SoalCategory;

class CreateTest extends Component
{

    public function render()
    {
        return view('livewire.admin.create-test');
    }

    /**
     * Redirect to create soal section
     * After saving the test title
     */
    public function next()
    {
        return redirect()->to('create-soal');
    }
}
