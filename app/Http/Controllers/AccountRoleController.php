<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRoleRequest;
use App\Http\Requests\UpdateAccountRoleRequest;
use App\Models\AccountRole;

class AccountRoleController extends Controller
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
     * @param  \App\Http\Requests\StoreAccountRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountRole  $accountRole
     * @return \Illuminate\Http\Response
     */
    public function show(AccountRole $accountRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountRole  $accountRole
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountRole $accountRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountRoleRequest  $request
     * @param  \App\Models\AccountRole  $accountRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRoleRequest $request, AccountRole $accountRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountRole  $accountRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountRole $accountRole)
    {
        //
    }
}
