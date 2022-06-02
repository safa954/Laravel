<?php

namespace App\Http\Controllers;

use App\Models\formreg;
use App\Http\Requests\StoreformregRequest;
use App\Http\Requests\UpdateformregRequest;

class FormregController extends Controller
{
    public function get_data()
    {
        $data = formreg::all();
        return view('register_user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_id()
    {
        $id = request('id');
        $data = formreg::where('id', $id)->first();
        return view('register_id', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreformregRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreformregRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formreg  $formreg
     * @return \Illuminate\Http\Response
     */
    public function show(formreg $formreg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formreg  $formreg
     * @return \Illuminate\Http\Response
     */
    public function edit(formreg $formreg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformregRequest  $request
     * @param  \App\Models\formreg  $formreg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateformregRequest $request, formreg $formreg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formreg  $formreg
     * @return \Illuminate\Http\Response
     */
    public function destroy(formreg $formreg)
    {
        //
    }
}
