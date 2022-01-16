<?php

namespace App\Http\Controllers;

use App\Models\sensor;
use App\Models\sensor_type;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sensor = sensor::all();
        $sensor = sensor::with(['sensor_type'])->get();
        //dd($sensor[0]->sensor_type->name);
        return view('sensors.index',['sensors'=>$sensor]);
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
     * @param  \App\Models\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function show(sensor $sensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function edit(sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function destroy(sensor $sensor)
    {
        $sensor->delete();
        return redirect()->back();
    }
}
