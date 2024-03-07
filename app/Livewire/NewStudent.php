<?php

namespace App\Livewire;

use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewStudent extends Component
{
    use WithFileUploads;

    public $name;
    public $matno;
    public $photo;
    public $department;
    public $rrr;

    public function render()
    {
        return view('livewire.new-student');
    }

    public function saveStudent()
    {
        try{
            // Validate the form fields
            $this->validate([
                'name' => 'required',
                'matno' => 'required',
                'photo' => 'required|image|max:4100', // Assuming photo is an image and max size is 1MB
                'department' => 'required',
            ]);

            $this->rrr = str_pad(mt_rand(1, 9999999999), 10, '0', STR_PAD_LEFT);


            // Save the student data
            $student = new Student;
            $student->name = $this->name;
            $student->matno = $this->matno;
            // Handle photo upload and store the file path in the database
            $student->photo = $this->photo->store('photos', 'public');
            $student->department = $this->department;
            $student->rrr = $this->rrr;
            $student->save();

            // Show success message or perform any other action
            flash()->addSuccess('Student added successfully.');
            // Reset form fields
            $this->reset();
        } catch (\Exception $e) {
            // Display a generic error message to the user
            flash() ->addError('An error occurred while saving the student. Please try again.');
        }

    }
}
