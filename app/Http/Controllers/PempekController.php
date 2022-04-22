<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PempekController extends Controller
{
    public function pempek()
    {
        return view('pempek');
    }
}
