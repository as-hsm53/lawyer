@extends('Dashboard.Lawyer.layout')
<!-- lawyer name start -->
@section('session')
@foreach($result as $r)
{{$r->firstName}}
{{$r->lastName}}
@endforeach
@endsection
<!-- lawyer name end -->
<!-- lawyer Qualification Start -->
@section('Qualification')
@foreach($result as $r)
{{$r->qualification}}
@endforeach
@endsection
<!-- lawyer Qualification End -->
<!-- lawyer image start -->
@section('lawyerImage')
@foreach($result as $r)
<div class="user-menu-media">
  <img src="../images/lawyers/{{$r->image}}"  alt="">						
</div>
@endforeach
@endsection

@section('booking')
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
                        <th>Email</th>
                        <th>Description</th>
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
                        <th>Email</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Timings</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->userFName}} {{$d->userLName}}</td>
                        <td>{{$d->userEmail}}</td>
                        <td>{{$d->description}}</td>
                        <td>{{$d->bookDate}}</td>
                        <td>{{$d->bookTimeStart}} - {{$d->bookTimeEnd}}</td>
                        <td>{{$d->city}}</td>
                        <td>{{$d->state}}</td>
                        @if($d->status == "Scheduled")
                        <td>
                            <form action="Approved" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$d->id}}">
                                <button type="submit"  class="btn btn-success">{{$d->status}}</button>
                            </form>
                        </td>
                        @elseif($d->status == "Approved")
                        <td>
                            <form action="Scheduled" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$d->id}}">
                                <button type="submit"  class="btn btn-warning">{{$d->status}}</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <button type="submit"  class="btn btn-danger">Pending</button>
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