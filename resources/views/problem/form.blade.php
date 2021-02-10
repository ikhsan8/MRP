@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-8 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add Problem</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('problem.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label foplace_code">Problem Code</label>
          <input type="input" class="form-control" id="problem_code" name="problem_code" placeholder="Enter Problem Code">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="problem_name">Problem Name</label>
          <input type="input" class="form-control" id="problem_name" name="problem_name" placeholder="Enter Problem Name">
        </div>
        
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="remarks">Remarks</label>
          <input type="input" class="form-control" id="remarks" name="remarks" placeholder="Enter remarks">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="other">Other</label>
          <input type="input" class="form-control" id="other" name="other" placeholder="Enter other">
        </div>        
               
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('problem') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
    </div>
  </div>        
    </div> 
      </div> 
        </div> 
  <!-- /.card -->
  @endsection