<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Qr extends Controller
{
    //
    public function index($id)
    {
        return view('qr', compact('id'));
    }
}
