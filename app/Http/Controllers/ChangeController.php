<?php

namespace App\Http\Controllers;

use App\Change;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Resources\ChangeResource;
use Symfony\Component\HttpFoundation\Response;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $change = New Change;
        $change = Change::orderBy('id')->get();
        return ChangeResource::collection($change);
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
        // return "add cahnge";
        $change = new Change($request->all());
        $change->save();

            $position = Position::findOrFail($change->position_id);
            if (in_array($change->type,[4,5])){
                $position->level_holde_id = 13;
            }
            $position->level_hold_id = $change->level_hold_id;
            $position->update();

        return response([
            'data' => new ChangeResource($change)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function show(Change $change)
    {
        return new ChangeResource($change);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function edit(Change $change)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Change $change)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function destroy(Change $change)
    {
        //
    }
}
