<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\Http\Resources\PositionResource;
use App\Http\Resources\PositionCollection;
use Symfony\Component\HttpFoundation\Response;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function empty(){
        $position = new Position;
        $position = Position::orderBy('no')
                ->where('status',2)
                ->get();
        // return $position;
        return PositionResource::collection($position);
    }
    public function index()
    {
        $position = new Position;
        $position = Position::orderBy('no')
                ->get();
        // return $position;
        return PositionResource::collection($position);
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
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        // return new PositionResource($position);
        $iPosition = new Position;
        $iPosition = Position::where('no','=',$position->id)
                ->get();
        return PositionCollection::collection($iPosition);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position,Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        // return $request;
        // $position->name1_id = $request->name1_id;
        // $position->name2_id = $request->name2_id;
        // $position->level_frame_id = $request->level_frame_id;
        // $position->level_hold_id = $request->level_hold_id;
        // $position->section_id = $request->section_id;
        // $position->division_id = $request->division_id;
        // $position->status = $request->status;
        // $position->description = $request->description;
        // $position->update();
        $position->update($request->all());
        return response([
            'data' => new PositionResource($position)
        ],Response::HTTP_CREATED);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }
}
