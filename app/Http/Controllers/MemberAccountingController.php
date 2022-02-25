<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberAccountingRequest;
use App\Http\Requests\UpdateMemberAccountingRequest;
use App\Models\MemberAccounting;

class MemberAccountingController extends Controller
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
     * @param  \App\Http\Requests\StoreMemberAccountingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberAccountingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberAccounting  $memberAccounting
     * @return \Illuminate\Http\Response
     */
    public function show(MemberAccounting $memberAccounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberAccounting  $memberAccounting
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberAccounting $memberAccounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberAccountingRequest  $request
     * @param  \App\Models\MemberAccounting  $memberAccounting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberAccountingRequest $request, MemberAccounting $memberAccounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberAccounting  $memberAccounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberAccounting $memberAccounting)
    {
        //
    }
}
