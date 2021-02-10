@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-8 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add place</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('place.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label foplace_code">Place Code</label>
          <input type="input" class="form-control" id="place_code" name="place_code" placeholder="Enter Place Code">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="place_name">Place Name</label>
          <input type="input" class="form-control" id="place_name" name="place_name" placeholder="Enter Place Name">
        </div>
        
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="remarks">Remarks</label>
          <input type="input" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="other">Other</label>
          <input type="input" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>        
               
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('place') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
    </div>
  </div>        
    </div> 
      </div> 
        </div> 
  <!-- /.card -->
  @endsection