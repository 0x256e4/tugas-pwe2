<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NasiGorengController extends Controller
{
    public function nasiGoreng()
    {
        return view('nasi-goreng');
    }
}
