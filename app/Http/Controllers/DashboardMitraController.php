<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Kegiatan;
use App\Models\MasterKegiatan;
use DB;

class DashboardMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = MasterKegiatan::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(mulai) as month_name"))
                    ->whereYear('mulai', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labels = $master->keys();
        $data = $master->values();
              
        
        return view('dashboard.index', [
            'mitras' => Mitra::latest()->paginate(),
            'kegiatans' => Kegiatan::latest()->paginate(),
            'labels' => $labels,
            'data' => $data,
        ]);
        
    }

    public function daftar_mitra()
    {
        return view('dashboard.mitras.daftar_mitra', [
            'mitras' => Mitra::latest()->filter(request(['search']))->paginate(20)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambah()
    {
        return view('dashboard.mitras.tambah' , [
            'banks' => Bank::all()
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'max:500',
            'golongan' => 'max:255',
            'nama_rek' => 'required|max:255',
            'bank_id' => 'required',
            'nomor_rek' => 'required|max:255'
        ]);

        $validatedData['name'] =  strtoupper($validatedData['name']);
        $validatedData['nama_rek'] = strtoupper($validatedData['nama_rek']);

        Mitra::create($validatedData);

        return redirect('/dashboard/mitra/daftar')->with('success', 'New Mitra has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('dashboard.mitras.edit', [
            'mitra' => $mitra,
            'banks' => Bank::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'max:500',
            'golongan' => 'max:255',
            'nama_rek' => 'required|max:255',
            'bank_id' => 'required',
            'nomor_rek' => 'required|max:255'
        ]);

        $validatedData['name'] =  strtoupper($validatedData['name']);
        $validatedData['nama_rek'] = strtoupper($validatedData['nama_rek']);

        Mitra::where('id', $mitra->id)->update($validatedData);

        return redirect('/dashboard/mitra/daftar')->with('success', 'Mitra has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        Mitra::destroy($mitra->id);
        return redirect('/dashboard/mitra/daftar')->with('success', 'Mitra has been deleted!');
    }
}
