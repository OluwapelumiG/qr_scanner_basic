<?php

namespace App\Livewire;

use App\Models\student;
use Livewire\Component;

class Students extends Component
{
    public $students;

    public function mount()
    {
        $this->students = Student::all();
    }
    public function render()
    {
        return view('livewire.students');
    }
}
