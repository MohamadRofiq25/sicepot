<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index()
    {
        return view('dashboard.print.print_spj');
    }

    public function spk()
    {
        return view('dashboard.print.print_spk');
    }

    public function bast()
    {
        return view('dashboard.print.print_bast');
    }
}
