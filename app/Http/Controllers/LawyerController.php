<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\cities;
use Illuminate\Support\Facades\Mail;
use App\Models\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    
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
            return redirect()->back()->with('error',"Unable To Establish a Connection at the moment. Please Try Again");
        }

    }
    public function index()
    {
        return view('Dashboard.Lawyer.home');
    }

    public function home(){
        return view('home.index');
    }
    
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
    
    public function show()
    {
        $cities = cities::all();

        return view('Dashboard.register', compact('cities'));
    }
    
    
    
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
    
    public function logout()
    {
        Session::flush();

        return redirect('login')->with('message', "You've Logged Out Succesfully");
    }
    // booking form code //
    public function bookingPost(Request $r){

        
        // email function??
        if($this->isonline()){
            $email_data=[

                'recipient' => $r->userEmail,
                'fromemail' => $r->lawyerEmail,
                'fromnumber'=> $r->number,
                'fromname' => $r->lawyerName,
                'subject' => $r->subject,
                'Message' => $r->Message
            ];
            Mail::send('Dashboard.lawyer.Emailtemplate',$email_data,function($message) use ($email_data){
                $message->to($email_data['recipient'])
                ->from($email_data['fromemail'],$email_data['fromnumber'],$email_data['fromname'])
                ->subject($email_data['subject']);
            });
            return redirect()->back()->with('success', 'Your Message has been sent');

        }
        else{
            return redirect()->back()->with('error', 'An error occured check your credientials');


        }

        
    }
    public function isonline($site = "https://youtube.com/"){

        if(@fopen($site,"r")){
            return true;
                }
                else{
                    return false;}
    // endfunction of contact///
}
}
