@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('category.update', $categorys->id) }}" enctype="multipart/form-data"> 
    @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="category_code">Category Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('category_code') }}" id="category_code" name="category_code" placeholder="Enter Category code " value= "{{ $categorys->category_code }}">
          @if ($errors->has('category_code'))
              <small class="text-danger">{{ $errors->first('category_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="category_name">Category Name</label>
          <input type="input" class="form-control{{ $errors->has('category_name') }}" id="category_name" name="category_name" placeholder="Enter Place Name" value="{{ $categorys->category_name }}">
          @if ($errors->has('category_name'))
              <small class="text-danger">{{ $errors->first('category_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $categorys->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group ">
        <label for="remarks">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $categorys->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
      </div>
      <div class="form-group ">
        <label for="other">Other</label>
          <input type="text" class="form-control{{ $errors->has('other') }}" id="other" name="other" placeholder="Enter Other" value="{{ $categorys->other }}">
          @if ($errors->has('other'))
              <small class="text-danger">{{ $errors->first('other') }}</small>
          @endif
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('category.home') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  </div>
  <!-- /.card -->
  @endsection