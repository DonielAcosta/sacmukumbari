<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecocinaRequest;
use App\Http\Requests\UpdatecocinaRequest;
use App\Models\cocina;

class CocinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecocinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecocinaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function show(cocina $cocina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function edit(cocina $cocina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecocinaRequest  $request
     * @param  \App\Models\cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecocinaRequest $request, cocina $cocina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function destroy(cocina $cocina)
    {
        //
    }
}
