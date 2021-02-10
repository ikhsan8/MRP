@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Title</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('title.update', $titles->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="title_code">Title Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('title_code') }}" id="title_code" name="title_code" placeholder="Enter title Code" value="{{ $titles->title_code }} ">
          @if ($errors->has('title_code'))
              <small class="text-danger">{{ $errors->first('title_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="title_name">Title Name</label>
          <input type="input" class="form-control{{ $errors->has('title_name') }}" id="title_name" name="title_name" placeholder="Enter title Name" value="{{ $titles->title_name }}">
          @if ($errors->has('title_name'))
              <small class="text-danger">{{ $errors->first('title_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $titles->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter remarks" value="{{ $titles->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="others">Others</label>
          <input type="text" class="form-control{{ $errors->has('others') }}" id="others" name="others" placeholder="Enter others" value="{{ $titles->others }}">
          @if ($errors->has('others'))
              <small class="text-danger">{{ $errors->first('others') }}</small>
          @endif
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('title') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  <!-- /.card -->
  @endsection