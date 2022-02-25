<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberApiRequest;
use App\Http\Requests\UpdateMemberApiRequest;
use App\Models\MemberApi;

class MemberApiController extends Controller
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
     * @param  \App\Http\Requests\StoreMemberApiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberApiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberApi  $memberApi
     * @return \Illuminate\Http\Response
     */
    public function show(MemberApi $memberApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberApi  $memberApi
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberApi $memberApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberApiRequest  $request
     * @param  \App\Models\MemberApi  $memberApi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberApiRequest $request, MemberApi $memberApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberApi  $memberApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberApi $memberApi)
    {
        //
    }
}
