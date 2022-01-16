<?php

namespace App\Http\Controllers;

use App\Models\install;
use Illuminate\Http\Request;

class InstallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $install = install::all();
        
        return view('installed.index',['installed'=>$install]);
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
     * @param  \App\Models\install  $install
     * @return \Illuminate\Http\Response
     */
    public function show(install $install)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\install  $install
     * @return \Illuminate\Http\Response
     */
    public function edit(install $install)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\install  $install
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, install $install)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\install  $install
     * @return \Illuminate\Http\Response
     */
    public function destroy(install $install)
    {
        $install->delete();
        return redirect()->back();
    }
}
