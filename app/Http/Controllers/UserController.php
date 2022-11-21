<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\admin;
use App\Models\cities;
use App\Models\lawyer;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    
    public function index(Request $r)
    {
        
        $cities = cities::all();
        $lawyers = lawyer::all();
        if($r->session()->has('USER_ID')){
            
            $user = DB::table('users')
            ->where("id" ,"=",$r->session()->get('USER_ID'))->get();
            return view('home.index', compact('user','cities','lawyers'));
        }
        else{
            return view('home.index', compact('lawyers'));
        }
    }

    public function register()
    {
        $cities = cities::all();

        return view('home.register', compact('cities'));
    }

    
    public function store(Request $r)
    {
        $validate = Validator::make($r->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'cityId' => 'required|not_in:0',
            'address' => 'required',
        ]);
        if($validate->fails()){
            return back()->withInput()->withErrors($validate);
        }
        else{
            $user = new user();
            $user->firstName = $r->firstName;
            $user->lastName = $r->lastName;
            $user->cityId = $r->cityId;
            $user->address = $r->address;
            $user->email = $r->email;
            $user->password = $r->password;
    
            $user->save();
    
            return redirect('/home/login')->with("message","Successfully Registered! Please Login.");
        }
    }

    public function login(Request $r){
        
        $validate = Validator::make($r->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if($validate->fails()){
            return redirect('/home/login')->withInput()->withErrors($validate);
            
        }
        else {
            $email = $r->post('email');
            $password = $r->post('password');
            // If data from lawyer table, go to lawyer dashboard
            $user = user::where(['email' => $email, 'password' => $password])->get();
            
            if(isset($user['0']->id)){
                
                $r->session()->put('USER_LOGIN', true);
                $r->session()->put('USER_ID', $user['0']->id);
                
                session()->flash('success', "You've Been Logged In Successfully!");
                return redirect('/');
            }
            else{
                return redirect('/home/login')->with('error','Invalid Credentials');
            }
        }
    }

    
    public function show()
    {
        return view("/home/login");
    }

    
    public function attorneys(Request $r)
    {
        if($r->session()->has('USER_ID')){
            
            $cities = cities::all();
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "=", "Active")->get();

            $user = DB::table('users')
            ->where("id" ,"=",$r->session()->get('USER_ID'))->get();
            return view('home.attorneys', compact('result','user','cities'));
        }
        else{
            $cities = cities::all();
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "=", "Active")->get();

            return view('home.attorneys', compact('result','cities'));
        }
        
    }

    public function filter(Request $r){
        
        $cityId = $r->cityId;
        $qualification = $r->qualification;
        $cities = cities::all();

        if($cityId != "0"){
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "Active")
            ->where("lawyers.cityId", $cityId)->get();
            if($qualification != "0"){
                $result = DB::table('lawyers')
                ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
                ->select('lawyers.*', 'cities.city')
                ->where("lawyers.status", "Active")
                ->where("lawyers.cityId", $cityId)
                ->where("lawyers.qualification", $qualification)->get();
            }
        }
        else if($qualification != "0"){
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "Active")
            ->where("lawyers.qualification", $qualification)->get();
        }
        $user = DB::table('users')
        ->where("id" ,"=",$r->session()->get('USER_ID'))->get();

        return view('home.attorneys', compact('result','user','cities'));
        
    }

    public function showAll(Request $r){
        $cities = cities::all();
        $result = DB::table('lawyers')
        ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
        ->select('lawyers.*', 'cities.city')
        ->where("lawyers.status", "=", "Active")->get();

        $user = DB::table('users')
        ->where("id" ,"=",$r->session()->get('USER_ID'))->get();
        return view('home.attorneys', compact('result','user','cities'));
    }

    public function lawyerPage(Request $r, $id)
    {
        $lawyer = lawyer::find($id);
        $data = DB::table('lawyers')
        ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
        ->select('lawyers.*', 'cities.city')
        ->where("lawyers.id", "=", $id)->get();

        $user = DB::table('users')
        ->where("id" ,"=",$r->session()->get('USER_ID'))->get();

        return view('home.lawyer', compact('data','user'));
    }

    public function dashboard(){
        $admins = admin::all();
        $result = DB::table('users')
        ->join('cities', 'users.cityId', "=" ,'cities.id')
        ->select('users.*', 'cities.city')->get();
        return view('admin.clients', compact('result', 'admins'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();

        return redirect()->back()->with('message', "You've Logged Out Succesfully");
    }
}
