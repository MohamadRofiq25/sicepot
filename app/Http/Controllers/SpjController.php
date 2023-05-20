<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpjController extends Controller
{
    public function index()
    {
        return view('dashboard.laporan.spj');
    }
}
