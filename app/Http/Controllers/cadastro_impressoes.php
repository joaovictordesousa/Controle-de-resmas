<?php

namespace App\Http\Controllers;

use App\Models\impressoes;
use Illuminate\Http\Request;

class cadastro_impressoes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "oi";
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function show(impressoes $impressoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function edit(impressoes $impressoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, impressoes $impressoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(impressoes $impressoes)
    {
        //
    }
}
