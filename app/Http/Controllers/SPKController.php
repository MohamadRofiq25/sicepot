<?php

namespace App\Http\Controllers;

use App\Models\SPK;
use App\Http\Requests\StoreSPKRequest;
use App\Http\Requests\UpdateSPKRequest;

class SPKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.data_spk.spk');
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
     * @param  \App\Http\Requests\StoreSPKRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSPKRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SPK  $sPK
     * @return \Illuminate\Http\Response
     */
    public function show(SPK $sPK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SPK  $sPK
     * @return \Illuminate\Http\Response
     */
    public function edit(SPK $sPK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSPKRequest  $request
     * @param  \App\Models\SPK  $sPK
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSPKRequest $request, SPK $sPK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SPK  $sPK
     * @return \Illuminate\Http\Response
     */
    public function destroy(SPK $sPK)
    {
        //
    }
}
