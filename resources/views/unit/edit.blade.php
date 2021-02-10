@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Unit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('unit.update', $units->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
        <div class="form-group">
          <label for="unit_code">Unit Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('unit_code') }}" id="unit_code" name="unit_code" placeholder="Enter Unit code " value= "{{ $units->unit_code }}">
          @if ($errors->has('unit_code'))
              <small class="text-danger">{{ $errors->first('unit_code') }}</small>
          @endif
        </div>
      <div class="card-body">
        <div class="form-group">
          <label for="unit_name">Unit Name</label>
          <input type="input" class="form-control{{ $errors->has('unit_name') }}" id="unit_name" name="unit_name" placeholder="Enter Unit Name" value="{{ $units->unit_name }}">
          @if ($errors->has('unit_name'))
              <small class="text-danger">{{ $errors->first('unit_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $units->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group ">
        <label for="remarks">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $units->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
      </div>
      <div class="form-group ">
        <label for="other">Other</label>
          <input type="text" class="form-control{{ $errors->has('other') }}" id="other" name="other" placeholder="Enter Other" value="{{ $units->other }}">
          @if ($errors->has('other'))
              <small class="text-danger">{{ $errors->first('other') }}</small>
          @endif
      </div>
      
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('unit') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  </div>
    


  <!-- /.card -->
  @endsection