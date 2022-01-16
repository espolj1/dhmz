<?php

namespace App\Http\Controllers;

use App\Models\sensor_type;
use Illuminate\Http\Request;

class SensorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $sensortype = sensor_type::all();
        return view('sensors_types.index',['sensors_types'=>$sensortype]);
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
     * @param  \App\Models\sensor_type  $sensor_type
     * @return \Illuminate\Http\Response
     */
    public function show(sensor_type $sensor_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sensor_type  $sensor_type
     * @return \Illuminate\Http\Response
     */
    public function edit(sensor_type $sensor_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sensor_type  $sensor_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sensor_type $sensor_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sensor_type  $sensor_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(sensor_type $sensor_type)
    {
        $sensor_type->delete();
        return redirect()->back();
        
    }
}
