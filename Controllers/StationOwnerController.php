<?php

namespace App\Http\Controllers;

use App\Models\station_owner;
use Illuminate\Http\Request;

class StationOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$stationowner = station_owner::all();
        $stationowner = station_owner::with(['city'])->get();
        //dd($stationowner[0]->city->name);
        return view('station_owners.index',['station_owners'=>$stationowner]);
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
     * @param  \App\Models\station_owner  $station_owner
     * @return \Illuminate\Http\Response
     */
    public function show(station_owner $station_owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\station_owner  $station_owner
     * @return \Illuminate\Http\Response
     */
    public function edit(station_owner $station_owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\station_owner  $station_owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, station_owner $station_owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\station_owner  $station_owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(station_owner $station_owner)
    {
        $station_owner->delete();
        return redirect()->back();
    }
}
