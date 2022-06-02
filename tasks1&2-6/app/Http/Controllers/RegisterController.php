<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Http\Requests\StoreregisterRequest;
use App\Http\Requests\UpdateregisterRequest;
use App\Models\formreg;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreregisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreregisterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateregisterRequest  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateregisterRequest $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
