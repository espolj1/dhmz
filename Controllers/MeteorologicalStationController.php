<?php

namespace App\Http\Controllers;

use App\Models\meteorological_station;
use Illuminate\Http\Request;

class MeteorologicalStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$meteorologicalstation = meteorological_station::all();*/
        $meteorologicalstation =meteorological_station::with(['city','station_category','station_type','station_owner'])->get();
        //dd($meteorologicalstation[0]->city->name);
        //dd($meteorologicalstation[0]->station_category->name);
        //dd($meteorologicalstation[0]->station_type->name);
        //dd($meteorologicalstation[0]->station_owner->name);
        return view('meteorological_stations.index',['meteorological_stations'=>$meteorologicalstation]);
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
     * @param  \App\Models\meteorological_station  $meteorological_station
     * @return \Illuminate\Http\Response
     */
    public function show(meteorological_station $meteorological_station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\meteorological_station  $meteorological_station
     * @return \Illuminate\Http\Response
     */
    public function edit(meteorological_station $meteorological_station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\meteorological_station  $meteorological_station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meteorological_station $meteorological_station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\meteorological_station  $meteorological_station
     * @return \Illuminate\Http\Response
     */
    public function destroy(meteorological_station $meteorological_station)
    {
        $meteorological_station->delete();
        return redirect()->back();
    }
}
