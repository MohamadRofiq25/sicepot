<?php

namespace App\Http\Controllers;

use App\Models\BAST;
use App\Http\Requests\StoreBASTRequest;
use App\Http\Requests\UpdateBASTRequest;

class BASTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.laporan.bast');
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
     * @param  \App\Http\Requests\StoreBASTRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBASTRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BAST  $bAST
     * @return \Illuminate\Http\Response
     */
    public function show(BAST $bAST)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BAST  $bAST
     * @return \Illuminate\Http\Response
     */
    public function edit(BAST $bAST)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBASTRequest  $request
     * @param  \App\Models\BAST  $bAST
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBASTRequest $request, BAST $bAST)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BAST  $bAST
     * @return \Illuminate\Http\Response
     */
    public function destroy(BAST $bAST)
    {
        //
    }
}
