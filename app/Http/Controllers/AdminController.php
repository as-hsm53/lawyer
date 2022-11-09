<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Dashboard()
    {
        $admins = admin::all();
        $lawyers = lawyer::all();

        return view('Admin.dashboard', compact('lawyers', 'admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $r)
    {
        $id = $r->post('id');
        lawyer::where(['id'=> $id])->update(['status'=>'Active']);
        
        session()->flash('success', "Lawyer Has Been Activated!");
        return redirect('admin/Dashboard');
    }
    public function Deactive(Request $r)
    {
        $id = $r->post('id');
        lawyer::where(['id'=> $id])->update(['status'=>'Deactive']);
        
        session()->flash('success', "Lawyer Has Been Deactivated!");
        return redirect('admin/Dashboard');
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();

        return redirect('login')->with('message', "You've Logged Out Succesfully");
    }
}
