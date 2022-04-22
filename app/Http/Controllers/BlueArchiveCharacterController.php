<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlueArchiveCharacterController extends Controller
{
    public function student()
    {
        return view("blue-archive-student");
    }
}
