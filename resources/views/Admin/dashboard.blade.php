@extends('Dashboard.Lawyer.layout')


@section('lawyersTable')

<!-- Total Lawyers -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                        <td>{{$lawyer->firstName}} {{$lawyer->lastName}}</td>
                        <td>{{$lawyer->email}}</td>
                        <td>{{$lawyer->qualification}}</td>
                        <td>{{$lawyer->description}}</td>
                        <td>{{$lawyer->address}}</td>
                        <td><img src="../images/lawyers/{{$lawyer->image}}" height="100px" width="100px" alt="Profile Picture"></td>
                        <td><a href="">{{$lawyer->status}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection