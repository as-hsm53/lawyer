<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
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
        // return view('home.bookings');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
