<?php

namespace App\Http\Controllers;

use App\Models\MasterKegiatan;
use App\Http\Requests\StoreMasterKegiatanRequest;
use App\Http\Requests\UpdateMasterKegiatanRequest;
use App\Models\Kegiatan;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MasterKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.master_kegiatan.index', [
            'master_kegiatans' => MasterKegiatan::latest()->filter(request(['search']))->paginate(20)->withQueryString()
        ]);
    }

    public function mitra()
    {
        $data = Mitra::where('name', 'LIKE', '%'.request('q').'%')->paginate(20);

        return response()->json($data);
    }

    public function kegiatan()
    {
        $data = Kegiatan::where('name', 'LIKE', '%'.request('q').'%')->paginate(20);

        return response()->json($data);
    }

    public function tambah()
    {
        return view('dashboard.master_kegiatan.tambah');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMasterKegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bulan' => 'required|max:255',
            'mitra_id' => 'required',
            'kegiatan_id' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'volume' => 'required',
            'spj_id' => 'nullable',
            'spk_id' => 'nullable',
            'bast_id' => 'nullable'
        ]);

        $validatedData['bulan'] = ucfirst(trans($validatedData['bulan']));

        MasterKegiatan::create($validatedData);

        return redirect('/dashboard/master_kegiatan/daftar')->with('success', 'New Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterKegiatan  $masterKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(MasterKegiatan $masterKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterKegiatan  $masterKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterKegiatan $masterKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasterKegiatanRequest  $request
     * @param  \App\Models\MasterKegiatan  $masterKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterKegiatan $masterKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterKegiatan  $masterKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterKegiatan $master_kegiatan)
    {
        MasterKegiatan::destroy($master_kegiatan->id);
        return redirect('/dashboard/master_kegiatan/daftar')->with('success', 'Data has been deleted!');
    }
}
