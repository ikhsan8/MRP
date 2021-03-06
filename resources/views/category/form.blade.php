@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Add Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="form-group">
          <label for="category_code">Category Code</label>
          <input type="input" class="form-control" id="category_code" name="category_code" placeholder="Enter Category  Code">
        </div>
      <div class="card-body">
        <div class="form-group">
          <label for="category_name">Category Name</label>
          <input type="input" class="form-control" id="category_name" name="category_name" placeholder="Enter Category  Name">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
        </div>
        <div class="form-group">
          <label for="remarks">Remarks</label>
          <input type="input" class="form-control" id="remarks" name="remarks" placeholder="Enter remarks">
        </div>
        <div class="card-body">
        <div class="form-group">
          <label for="other">Other</label>
          <input type="input" class="form-control" id="other" name="other" placeholder="Enter other">
        </div>
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('category') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>
      </form>
    </div>
  </div>
    </div>  


  <!-- /.card -->
  @endsection