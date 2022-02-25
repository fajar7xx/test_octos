<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberDetRequest;
use App\Http\Requests\UpdateMemberDetRequest;
use App\Models\MemberDet;

class MemberDetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMemberDetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberDetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberDet  $memberDet
     * @return \Illuminate\Http\Response
     */
    public function show(MemberDet $memberDet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberDet  $memberDet
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberDet $memberDet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberDetRequest  $request
     * @param  \App\Models\MemberDet  $memberDet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberDetRequest $request, MemberDet $memberDet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberDet  $memberDet
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberDet $memberDet)
    {
        //
    }
}
