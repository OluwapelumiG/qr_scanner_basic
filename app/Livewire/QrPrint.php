<?php

namespace App\Livewire;

use App\Models\student;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrPrint extends Component
{
    public $student;

    public function mount(Student $id)
    {
        $this->student = $id;
    }
    public function render()
    {
        $rrr = $this->student->rrr;
        $qrCode = QrCode::generate("http://127.0.0.1/qr-scan/".$rrr);
        return view('livewire.qr-print', ['qrCode' => $qrCode]);
    }
}
