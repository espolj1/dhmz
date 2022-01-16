<?php

namespace App\Http\Controllers;

use App\Models\station_category;
use Illuminate\Http\Request;

class StationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stationcategory = station_category::all();
        return view('station_categories.index',['station_categories'=>$stationcategory]);
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
     * @param  \App\Models\station_category  $station_category
     * @return \Illuminate\Http\Response
     */
    public function show(station_category $station_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\station_category  $station_category
     * @return \Illuminate\Http\Response
     */
    public function edit(station_category $station_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\station_category  $station_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, station_category $station_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\station_category  $station_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(station_category $station_category)
    {
        $station_category->delete();
        return redirect()->back();
    }
}
