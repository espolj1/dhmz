<?php

namespace App\Http\Controllers;

use App\Models\station_type;
use Illuminate\Http\Request;

class StationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stationtype = station_type::all();
        return view('station_types.index',['station_types'=>$stationtype]);
        
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
     * @param  \App\Models\station_type  $station_type
     * @return \Illuminate\Http\Response
     */
    public function show(station_type $station_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\station_type  $station_type
     * @return \Illuminate\Http\Response
     */
    public function edit(station_type $station_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\station_type  $station_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, station_type $station_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\station_type  $station_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(station_type $station_type)
    {
        $station_type->delete();
        return redirect()->back();
    }
}
