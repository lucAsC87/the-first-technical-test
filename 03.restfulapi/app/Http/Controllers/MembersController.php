<?php

namespace App\Http\Controllers;

use App\Models\members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return members::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return members::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(members $members)
    {
        return members::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, members $members)
    {
        $member = members::find($id);
        $member->update($request->all());
        return $member;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(members $members)
    {
        return members::destroy($id);
    }
}
