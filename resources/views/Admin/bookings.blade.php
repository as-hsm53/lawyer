@extends('Dashboard.Lawyer.layout')
@section('session')
@foreach($admins as $admin)
Hussain
@endforeach
@section('admin')
Super Admin
@endsection
@endsection
@section('bookings')
@if(session()->has('success'))
<div class="col-lg-12">
    <div class=" alert alert-success">{{session("success")}}</div>
</div>
@endif
<div>
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Bookings</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table_template table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Lawyer</th>
                        <th>Consaltance</th>
                        <th>Date</th>
                        <th>Timings</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Lawyer</th>
                        <th>Consaltance</th>
                        <th>Date</th>
                        <th>Timings</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($result as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->userFName}} {{$r->userLName}}</td>
                        <td>{{$r->lawyerFName}} {{$r->lawyerLName}}</td>
                        <td>{{$r->qualification}}</td>
                        <td>{{$r->bookDate}}</td>
                        <td>{{$r->bookTimeStart}} - {{$r->bookTimeEnd}}</td>
                        <td>{{$r->city}}</td>
                        <td>{{$r->state}}</td>
                        @if($r->status == "Deactive")
                        <td>
                            <form action="Approved" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$r->id}}">
                                <button type="submit"  class="btn btn-danger">Pending</button>
                            </form>
                        </td>
                        @elseif($r->status == "Approved")
                        <td>
                            <form action="Pending" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$r->id}}">
                                <button type="submit"  class="btn btn-warning">{{$r->status}}</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <button type="submit"  class="btn btn-success">Scheduled</button>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection