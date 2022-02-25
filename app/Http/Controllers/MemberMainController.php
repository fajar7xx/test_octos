<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberMainRequest;
use App\Http\Requests\UpdateMemberMainRequest;
use App\Models\MemberMain;

class MemberMainController extends Controller
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
     * @param  \App\Http\Requests\StoreMemberMainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberMainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberMain  $memberMain
     * @return \Illuminate\Http\Response
     */
    public function show(MemberMain $memberMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberMain  $memberMain
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberMain $memberMain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberMainRequest  $request
     * @param  \App\Models\MemberMain  $memberMain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberMainRequest $request, MemberMain $memberMain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberMain  $memberMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberMain $memberMain)
    {
        //
    }
}
