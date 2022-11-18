@extends('home.main')

@section('bookings')
<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Bookings</h2>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="section_header text-center">
                    Our Schedule
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table_template darklinks" id="timetable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Client</th>
                                <th>Lawyer</th>
                                <th>Date</th>
                                <th>Timings</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($result as $r)
                            <tr>
                                <td>{{$r->id}}</td>
                                <td>{{$r->userFName}} {{$r->userLName}}</td>
                                <td>{{$r->lawyerFName}} {{$r->lawyerLName}}</td>
                                <td>{{$r->bookDate}}</td>
                                <td>{{$r->bookTimeStart}} - {{$r->bookTimeEnd}}</td>
                                <td>{{$r->city}}</td>
                                <td>{{$r->state}}</td>
                                <td>{{$r->description}}</td>
                                @if($r->status == "Deactive")
                                <td><p class="btn btn-danger"> Pending</p></td>
                                @elseif($r->status == "Approved")
                                <td><p class="btn btn-warning">{{$r->status}}</p></td>
                                @else
                                <td><p class="btn btn-success">{{$r->status}}</p></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection