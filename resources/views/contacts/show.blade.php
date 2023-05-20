@extends('layouts.main')
@section('title', 'Detail')
@section('content')
<div class="container">


<a href="{{route('contacts.index')}}">Back</a>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table table-dark">
  <thead>
  <!-- <tr>
      <th scope="col">id</th>
      <th scope="col">{{$contacts->id}}</th>
     
    </tr> -->
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">{{$contacts->first_name}}</th>
     
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">{{$contacts->last_name}}</th>
     
    </tr>

    <tr>
      <th scope="col">Email</th>
      <th scope="col">{{$contacts->email}}</th>
     
    </tr>

    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">{{$companies->name}}</th>
     
    </tr>



    <tr>
      <th scope="col">Country</th>
      <th scope="col">{{$countries->countryName}}</th>
     
    </tr>



    <tr>
      <th scope="col">Created At</th>
      <th scope="col">{{$contacts->created_at}}</th>
     
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <th scope="col">{{$contacts->updated_at}}</th>
     
    </tr>
  </thead>
 
</table>
</div>
</div>

</div>
@endsection