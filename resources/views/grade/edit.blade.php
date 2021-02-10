@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Grade</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('grade.update', $grades->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="grade_code">Grade Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('grade_code') }}" id="grade_code" name="grade_code" placeholder="Enter Grade Code" value="{{ $grades->grade_code }} ">
          @if ($errors->has('grade_code'))
              <small class="text-danger">{{ $errors->first('grade_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input type="input" class="form-control{{ $errors->has('grade_name') }}" id="grade_name" name="grade_name" placeholder="Enter Grade Name" value="{{ $grades->grade_name }}">
          @if ($errors->has('grade_name'))
              <small class="text-danger">{{ $errors->first('grade_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $grades->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter remarks" value="{{ $grades->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="others">Others</label>
          <input type="text" class="form-control{{ $errors->has('others') }}" id="others" name="others" placeholder="Enter others" value="{{ $grades->others }}">
          @if ($errors->has('others'))
              <small class="text-danger">{{ $errors->first('others') }}</small>
          @endif
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