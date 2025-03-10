<?php

namespace App\Http\Controllers;

use App\Models\availability_status;
use Illuminate\Http\Request;

class AvailabilityStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return availability_status::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return availability_status::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\availability_status  $availability_status
     * @return \Illuminate\Http\Response
     */
    public function show(availability_status $availability_status)
    {
        return availability_status::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\availability_status  $availability_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, availability_status $availability_status)
    {
        $availability = availability_status::find($id);
        $availability->update($request->all());
        return $availability;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\availability_status  $availability_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(availability_status $availability_status)
    {
        return availability_status::destroy($id);
    }
}
