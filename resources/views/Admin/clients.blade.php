@extends('Dashboard.Lawyer.layout')
@section('session')
@foreach($admins as $admin)
Hussain
@endforeach
@endsection
@section('admin')
Super Admin
@endsection

@section('clients')
<div>
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Clients</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table_template table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Address</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($result as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->firstName}} {{$r->lastName}}</td>
                        <td>{{$r->email}}</td>
                        <td>{{$r->city}}</td>
                        <td>{{$r->address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection