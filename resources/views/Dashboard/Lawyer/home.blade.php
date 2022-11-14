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
<!-- lawyer image end -->

@section('lawyer')
@if(session()->has('success'))
<div class="col-lg-12">
    <div class=" alert alert-success">{{session("success")}}</div>
</div>
@endif
<h1 class="text-primary">Edit Profile</h1>
  @foreach($result as $r)
  <div class="col-md-12">
      <form class="row" method="POST" action="updated" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-md-6">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" name="firstName" value="{{$r->firstName}}" class="form-control" id="firstName">
        </div>
        <div class="mb-3 col-md-6">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" name="lastName" value="{{$r->lastName}}" class="form-control" id="lastName">
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" value="{{$r->email}}" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-md-6">
          <label for="qualification" class="form-label">Qualification</label>
          <input type="text" name="qualification" value="{{$r->qualification}}" class="form-control" id="qualification" disabled>
        </div>
        <div class="mb-3 col-md-6">
          <label for="address" class="form-label">Address</label>
          <input type="text" name="address" value="{{$r->address}}" class="form-control" id="address">
        </div>
        <div class="mb-3 col-md-6">
        <label for="cityId" class="form-label">City</label>
        <select name="cityId" class="form-select form-select form-control" id="cityId" disabled>
          <option value="{{$r->cityId}}" selected>{{$r->city}}</option>
          @foreach($cities as $c)
          <option value="{{$c->id}}">{{$c->city}}</option>
          @endforeach
          </select>
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="description" style="max-width: 495px; max-height: 50px;">{{$r->description}}</textarea>
        </div>
        <div class="mb-3 col-md-6">
          <label for="image" class="form-label">Upload Image</label>
          <input type="file" name="image" class="form-control" id="image">
        </div>
        
        <div class="col-md-12 mt-5">
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
      </form>
  @endforeach
  </div>
@endsection