<?php

namespace App\Http\Controllers;

use App\LevelHold;
use Illuminate\Http\Request;

class LevelHoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LevelHold::all();
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
     * @param  \App\LevelHold  $levelHold
     * @return \Illuminate\Http\Response
     */
    public function show(LevelHold $levelHold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LevelHold  $levelHold
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelHold $levelHold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LevelHold  $levelHold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LevelHold $levelHold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LevelHold  $levelHold
     * @return \Illuminate\Http\Response
     */
    public function destroy(LevelHold $levelHold)
    {
        //
    }
}
