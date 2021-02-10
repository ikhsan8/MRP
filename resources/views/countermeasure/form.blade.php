@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add Countermeasure</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('countermeasure.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="countermeasure_code">Countermeasure Code</label>
          <input type="input" class="form-control" id="countermeasure_code" name="countermeasure_code" placeholder="Enter un code">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for=countermeasuret_name">Countermeasure Name</label>
          <input type="input" class="form-control" id="countermeasure_name" name="countermeasure_name" placeholder="Enter un name">
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
        <a href="{{ url('countermeasure') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  </div> 
     </div> 
        </div> 
  <!-- /.card -->
  @endsection