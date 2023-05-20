<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\StorekegiatanRequest;
use App\Http\Requests\UpdatekegiatanRequest;
use App\Models\Satuan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_home()
    {
        return view('daftar_kegiatan', [
            'kegiatans' => Kegiatan::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
            "active" => "daftar_kegiatan"
        ]);
    }

    public function index()
    {
        return view('dashboard.kegiatan.index', [
            'kegiatans' => Kegiatan::latest()->filter(request(['search']))->paginate(20)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function tambah()
    {
        return view('dashboard.kegiatan.tambah', [
            'satuans' => Satuan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'satuan_id' => 'required',
            'harga' => 'required',
            'ba' => 'required|max:255'
        ]);

        Kegiatan::create($validatedData);

        return redirect('/dashboard/kegiatan/daftar')->with('success', 'New Kegiatan has been added!');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.edit', [
            'kegiatan' => $kegiatan,
            'satuans' => Satuan::all() 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekegiatanRequest  $request
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatan $kegiatan)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'satuan_id' => 'required',
            'harga' => 'required',
            'ba' => 'required|max:255'
        ]);

        Kegiatan::where('id', $kegiatan->id)->update($validatedData);

        return redirect('/dashboard/kegiatan/daftar')->with('success', 'Kegiatan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->id);
        return redirect('/dashboard/kegiatan/daftar')->with('success', 'Kegiatan has been deleted!');
    }
}
