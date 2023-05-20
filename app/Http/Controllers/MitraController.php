<?php

namespace App\Http\Controllers;
use App\Models\Mitra;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return view('daftar_mitra', [
            'mitras' => Mitra::latest()->paginate(20)->withQueryString(),
            "active" => "daftar_mitra"
        ]);
    }
}
