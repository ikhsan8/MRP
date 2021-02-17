@extends('layouts.v_template')
@section('content')

<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add Supplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('suppliers.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="suppliers_code">Suppliers Code</label>
          <input type="input" class="form-control" id="suppliers_code" name="suppliers_code" placeholder="Enter suppliers code">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="suppliers_name">Suppliers Name</label>
          <input type="input" class="form-control" id="suppliers_name" name="suppliers_name" placeholder="Enter suppliers name">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="website">website</label>
          <input type="text" class="form-control" id="website" name="website" placeholder="Enter website">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
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
        <a href="{{ url('suppliers') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  </div> 
     </div> 
        </div> 
  <!-- /.card -->
  @endsection