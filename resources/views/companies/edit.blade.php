@extends('layouts.main')
@section('title', 'Edit Country')
@section('content')

 <!-- content -->
 <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Country</strong>
              </div>           
              <div class="card-body">
              <form action="{{route('companies.update',$companies->id)}}" method="POST">
            @csrf
                 @method('PUT')
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Company Name</label>
                      <div class="col-md-9">
                        <input type="text" name="name" value="{{$companies->name}}" id="name" class="form-control is-invalid">
                        
                      </div>
                    </div>

                   
                    <div class="form-group row">
                      <label for="address" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" name="address" value="{{$companies->address}}" id="address" class="form-control is-invalid">
                        
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" value="{{$companies->email}}" id="email" class="form-control is-invalid">
                        
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="website" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <input type="text" name="website" value="{{$companies->website}}" id="website" class="form-control is-invalid">
                        
                      </div>
                    </div>

                    
                    
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('companies.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection