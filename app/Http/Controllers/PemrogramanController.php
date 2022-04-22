<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemrogramanController extends Controller
{
    public function best()
    {
        return view('pemrograman-terbaik');
    }
}
