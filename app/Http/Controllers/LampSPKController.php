<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LampSPKController extends Controller
{
    public function index()
    {
        return view('dashboard/laporan/lamp_spk');
    }
}
