@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Section</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('section.update', $sections->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="section_code">Section Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('section_code') }}" id="section_code" name="section_code" placeholder="Enter section Code" value="{{ $sections->section_code }} ">
          @if ($errors->has('section_code'))
              <small class="text-danger">{{ $errors->first('section_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="section_name">Section Name</label>
          <input type="input" class="form-control{{ $errors->has('section_name') }}" id="section_name" name="section_name" placeholder="Enter section Name" value="{{ $sections->section_name }}">
          @if ($errors->has('section_name'))
              <small class="text-danger">{{ $errors->first('section_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $sections->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter remarks" value="{{ $sections->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="others">Others</label>
          <input type="text" class="form-control{{ $errors->has('others') }}" id="others" name="others" placeholder="Enter others" value="{{ $sections->others }}">
          @if ($errors->has('others'))
              <small class="text-danger">{{ $errors->first('others') }}</small>
          @endif
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('section') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  <!-- /.card -->
  @endsection