<?php

namespace App\Http\Controllers;

use App\Models\CarUser;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarUser  $carUser
     * @return \Illuminate\Http\Response
     */
    public function show(CarUser $carUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarUser  $carUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarUser $carUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarUser  $carUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarUser $carUser)
    {
        //
    }
}
