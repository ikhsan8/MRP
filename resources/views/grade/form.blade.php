@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add Grade</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('grade.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="grade_code">Grade Code</label>
          <input type="input" class="form-control" id="grade_code" name="grade_code" placeholder="Enter Grade Code">
        </div>
        <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input type="input" class="form-control" id="grade_name" name="grade_name" placeholder="Enter Grade Name">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="input" class="form-control" id="description" name="description" placeholder="Enter Description">
        </div>
        <div class="form-group">
          <label for="remarks">Remarks</label>
          <input type="input" class="form-control" id="remarks" name="remarks" placeholder="Enter remarks">
        </div>
        <div class="form-group">
          <label for="others">Others</label>
          <input type="input" class="form-control" id="others" name="others" placeholder="Enter others">
        </div>
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('grade') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  <!-- /.card -->
  @endsection