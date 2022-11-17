@extends('Dashboard.Lawyer.layout')
@section('session')
@foreach($admins as $admin)
Hussain
@endforeach
@endsection
@section('admin')
Super Admin
@endsection
@section('lawyersTable')
@if(session()->has('success'))
<div class="col-lg-12">
    <div class=" alert alert-success">{{session("success")}}</div>
</div>
@endif
<!-- Total Lawyers -->
<div>
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Manage Lawyers</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table_template table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Qualification</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Qualification</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($lawyers as $lawyer)
                    <tr>
                        <td>{{$lawyer->id}}</td>
                        <td>{{$lawyer->firstName}} {{$lawyer->lastName}}</td>
                        <td>{{$lawyer->email}}</td>
                        <td>{{$lawyer->qualification}}</td>
                        <td>{{$lawyer->description}}</td>
                        <td>{{$lawyer->address}}</td>
                        <td><img src="../images/lawyers/{{$lawyer->image}}" height="100px" width="100px" alt="Profile Picture"></td>
                        @if($lawyer->status == "Deactive")
                        <td>
                        <form action="Active" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$lawyer->id}}">
                                <button type="submit"  class="btn btn-danger">{{$lawyer->status}}</button>
                            </form>
                        </td>
                        @endif
                        @if($lawyer->status != "Deactive")
                        <td>
                            <form action="Deactive" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$lawyer->id}}">
                                <button type="submit"  class="btn btn-success">{{$lawyer->status}}</button>
                            </form>
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