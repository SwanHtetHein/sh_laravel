
@extends('layouts.main')

@section('content')

@section('title', 'Countries')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />


<style>
    .dataTables_wrapper .dataTables_length {
    float: left;
    padding: 10px !important;
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: right;
    padding: 10px !important;
}
.dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding: 10px !important;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding: 10px !important;
}
div.dt-buttons {
    float: left;
    margin-top: 10px !important;
}
</style>
<main class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">Countries</h2>
                    <div class="ml-auto">
                      <a href="{{route('countries.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                
                
                <table class="table table-striped table-hover display" id="example">
                  <thead>
                    <tr>
                    
                      <th scope="col">No</th>
                      <th scope="col">Country Name</th>
                      <th scope="col">Zipcode</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Updated At</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    
                

                  @if ($countries->count())
                          @foreach ($countries as $index => $country)
                    <tr>
                      <th scope="row">{{ $index + 1}}</th>
                      <td>{{  $country->countryName }}</td>
                      <td>{{  $country->zipcode }}</td>
                      <td>{{  $country->created_at }}</td>
                      <td>{{  $country->updated_at }}</td>


                      <td width="150">
                        <a href="{{route('countries.show',$country->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{route('countries.edit',$country->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{route('countries.destroy',$country->id)}}" class="btn btn-sm btn-circle btn-outline-danger" ><i class="fa fa-times"></i></a>
                      
                      </td>
                    </tr>
                     @endforeach
                     @endif
                     </tbody>
                </table> 

              
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script>
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
@endsection