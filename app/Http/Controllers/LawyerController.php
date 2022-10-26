<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $lawyer = new lawyer();
        $lawyer->firstName = $r->firstName;
        $lawyer->lastName = $r->lastName;
        $lawyer->qualification = $r->qualification;
        $lawyer->cityId = $r->cityId;
        $lawyer->address = $r->address;
        $lawyer->description = $r->description;
        $lawyer->email = $r->email;
        $lawyer->password = $r->password;

        $lawyer->save();

        return view('Dashboard.login')->with("message","Successfully Registered");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cities = cities::all();

        return view('Dashboard.register', compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit(lawyer $lawyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lawyer $lawyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(lawyer $lawyer)
    {
        //
    }
}
