<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $r)
    {
        if($r->session()->has('USER_ID')){
            $booking = new booking();
            $booking->lawyerId = $r->lawyerId;
            $booking->bookDate = $r->bookDate;
            $booking->bookTimeStart = $r->bookTimeStart;
            $booking->bookTimeEnd = $r->bookTimeEnd;
            $booking->description = $r->description;
            $booking->cityId = $r->cityId;
            $booking->userId = $r->session()->get('USER_ID');

            $booking->save();
            return redirect()->back()->with("message", "Your Booking Has Been Successfully Requested, Please Await Confirmation");
        }
        else{
            return redirect('/home/login')->with("error", "You Need to Login First");
        }
    }

    
    public function show(Request $r)
    {
        if($r->session()->has('USER_ID')){
            $result = DB::table('bookings as b')
            ->join('users as u', 'b.userId', "=" ,'u.id')
            ->join('lawyers as l', 'b.lawyerId', "=" ,'l.id')
            ->join('cities as c', 'b.cityId', "=" ,'c.id')
            ->select('u.firstName as userFName','u.lastName as userLName','l.firstName as lawyerFName',
            'l.lastName as lawyerLName', 'b.*', 'c.city', 'c.state')->get();

            $user = DB::table('users')
            ->where("id" ,"=",$r->session()->get('USER_ID'))->get();

            return view('home.bookings', compact('result','user'));
        }
        else{
            $result = DB::table('bookings as b')
            ->join('users as u', 'b.userId', "=" ,'u.id')
            ->join('lawyers as l', 'b.lawyerId', "=" ,'l.id')
            ->join('cities as c', 'b.cityId', "=" ,'c.id')
            ->select('u.firstName as userFName','u.lastName as userLName','l.firstName as lawyerFName',
            'l.lastName as lawyerLName', 'b.*', 'c.city', 'c.state')->get();

            return view('home.bookings', compact('result'));
        }
    }

   
    public function Bookings()
    {
        $admins = admin::all();
        $result = DB::table('bookings as b')
        ->join('users as u', 'b.userId', "=" ,'u.id')
        ->join('lawyers as l', 'b.lawyerId', "=" ,'l.id')
        ->join('cities as c', 'b.cityId', "=" ,'c.id')
        ->select('u.firstName as userFName','u.lastName as userLName','l.firstName as lawyerFName',
        'l.lastName as lawyerLName', 'l.qualification', 'b.*', 'c.city', 'c.state')->get();

        return view('admin.bookings', compact('result','admins'));
    }

    public function Lawyer(Request $r)
    {
        $data = DB::table('bookings as b')
        ->join('users as u', 'b.userId', "=" ,'u.id')
        ->join('lawyers as l', 'b.lawyerId', "=" ,'l.id')
        ->join('cities as c', 'b.cityId', "=" ,'c.id')
        ->select('u.firstName as userFName','u.lastName as userLName','u.email as userEmail','l.firstName as lawyerFName',
        'l.lastName as lawyerLName', 'l.qualification', 'b.*', 'c.city', 'c.state')
        ->where('l.id', '=', $r->session()->get('LAWYER_ID'))->get();

        $result = DB::table('lawyers')
        ->select('lawyers.*')
        ->where("lawyers.id" ,"=",$r->session()->get('LAWYER_ID'))->get();

        return view('Dashboard.Lawyer.bookings', compact('result','data'));
        // return view('admin.bookings', compact('result','admins'));

    }

    public function Approved(Request $r){
        $id = $r->post('id');
        booking::where(['id'=> $id])->update(['status'=>'Approved']);
        
        session()->flash('success', "Booking Has Been Approved!");
        return redirect('admin/Bookings');
    }
    public function LawyerApproved(Request $r){
        $id = $r->post('id');
        booking::where(['id'=> $id])->update(['status'=>'Approved']);
        
        session()->flash('success', "Booking Has Been Switched to Approved!");
        return redirect('Bookings');
    }
    public function Pending(Request $r){
        $id = $r->post('id');
        booking::where(['id'=> $id])->update(['status'=>'Deactive']);
        
        session()->flash('success', "Booking Has Been Switched To Pending!");
        return redirect('admin/Bookings');
    }
    public function Scheduled(Request $r){
        $id = $r->post('id');
        booking::where(['id'=> $id])->update(['status'=>'Scheduled']);
        
        session()->flash('success', "Booking Has Been Scheduled!");
        return redirect('Bookings');
    }
    public function update(Request $request, booking $booking)
    {
        //
    }

    
    public function destroy(booking $booking)
    {
        //
    }
}
