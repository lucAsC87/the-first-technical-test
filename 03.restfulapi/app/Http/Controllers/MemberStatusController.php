<?php

namespace App\Http\Controllers;

use App\Models\member_status;
use Illuminate\Http\Request;

class MemberStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return member_status::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return member_status::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member_status  $member_status
     * @return \Illuminate\Http\Response
     */
    public function show(member_status $member_status)
    {
        return member_status::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_status  $member_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member_status $member_status)
    {
        $status = member_status::find($id);
        $status->update($request->all());
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member_status  $member_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(member_status $member_status)
    {
        return member_status::destroy($id);
    }
}
