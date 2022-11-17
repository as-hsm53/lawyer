<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\cities;
use App\Models\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $cities = cities::all();

        return view('home.register', compact('cities'));
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
            return redirect('login')->withInput()->withErrors($validate);
            
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("/home/login");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function attorneys(Request $r)
    {
        if($r->session()->has('USER_ID')){
            
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "=", "Active")->get();

            $user = DB::table('users')
            ->where("id" ,"=",$r->session()->get('USER_ID'))->get();
            return view('home.attorneys', compact('result','user'));
        }
        else{
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.status", "=", "Active")->get();

            return view('home.attorneys', compact('result'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function lawyerPage(Request $r, $id)
    {
        $lawyer = lawyer::find($id);
        $data = DB::table('lawyers')
        ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
        ->select('lawyers.*', 'cities.city')
        ->where("lawyers.id", "=", $id)->get();

        return view('home.lawyer', compact('data'));
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
