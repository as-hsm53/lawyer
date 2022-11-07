<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\cities;
use App\Models\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
    //Dashboard input tags function
    public function Dashboard(Request $r){

        $cities = cities::all();
        if($r->session()->has('LAWYER_ID')){
            
            $result = DB::table('lawyers')
            ->join('cities', 'lawyers.cityId', "=" ,'cities.id')
            ->select('lawyers.*', 'cities.city')
            ->where("lawyers.id" ,"=",$r->session()->get('LAWYER_ID'))->get();
            return view('Dashboard.Lawyer.home', compact('result','cities'));
        }
        else{
            return redirect()->back()->with('error',"Sheeesh");
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Lawyer.home');
    }

    public function home(){
        return view('home.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // registering lawyer With input validation
    public function store(Request $r)
    {
        $validate = Validator::make($r->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:lawyers,email',
            'password' => 'required|min:8',
            'qualification' => 'required|not_in:0',
            'cityId' => 'required|not_in:0',
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
    
            return redirect('login')->with("message","Successfully Registered! Please Enter Your Credenials To Login");
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
            $lawyerUser = lawyer::where(['email' => $email, 'password' => $password])->get();
            // If data from admin table, go to admin dashboard
            $adminUser = admin::where(['email' => $email, 'password' => $password])->get();
            
            if(isset($lawyerUser['0']->id)){
                
                $r->session()->put('LAWYER_LOGIN', true);
                $r->session()->put('LAWYER_ID', $lawyerUser['0']->id);
                
                session()->flash('success', "You've Been Logged In Successfully!");
                return redirect('Dashboard');
            }
            else if(isset($adminUser['0']->id)){

                $r->session()->put('ADMIN_LOGIN', true);
                $r->session()->put('ADMIN_ID', $adminUser['0']->id);
                
                session()->flash('success', "You've Been Logged In Successfully!");
                return redirect('admin/Dashboard');
            }
            else{
                return redirect('login')->with('error','Invalid Credentials');
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
    public function update(Request $r, lawyer $lawyer)
    {
        $lawyer = lawyer::find(1);
        $firstName = $r->input('firstName');
        $lastName = $r->input('lastName');
        $email = $r->input('email');
        $address = $r->input('address');
        $description = $r->input('description');
        
        //Upload File
        if($r->hasFile('image')){
            
            $file = $r->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/lawyers/', $fileName);
            $lawyer->image = $fileName;

            //Update Query
            $lawyer::where('id', '=', $r->session()->get('LAWYER_ID'))
            ->update(['firstName' => $firstName,  'lastName' => $lastName, 'email' => $email,
            'address' => $address,'image' => $fileName, 'description' => $description]);
        }
        else{
            //Update Query
            $lawyer::where('id', '=', $r->session()->get('LAWYER_ID'))
            ->update(['firstName' => $firstName,  'lastName' => $lastName, 'email' => $email,
            'address' => $address, 'description' => $description]);
        }
        
        session()->flash('success', "Your Data Has Been Updated Successfully!");
        return redirect('Dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();

        return redirect('login')->with('message', "You've Logged Out Succesfully");
    }
}
