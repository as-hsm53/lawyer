<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('Dashboard.login');
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
        $validate = Validator::make($r->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:lawyers,email',
            'password' => 'required|min:8',
            'qualification' => 'required',
            'cityId' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);
        if($validate->fails()){
            return back()->withInput()->withErrors($validate);
        }
        else{
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
    
            return redirect('login')->with("message","Successfully Registered");
        }
    }
    
    public function login(Request $r){
        $validate = Validator::make($r->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()){
            return back()->withInput()->withErrors($validate);
        }
        else{
            if(Auth::attempt($r->only(['email','password']))){
                return view('Dashboard.Lawyer.home')->with('message', 'You Have Been Successfully Logged In!');
            }
            else{
                return back()->withErrors("Invalid Credentials");
            }
        }
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
