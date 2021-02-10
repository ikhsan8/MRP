@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Problem</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('problem.update', $problems->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
        <div class="form-group">
          <label for="problem_code">Problem Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('problem_code') }}" id="problem_code" name="problem_code" placeholder="Enter Problem code " value= "{{ $problems->problem_code }}">
          @if ($errors->has('problem_code'))
              <small class="text-danger">{{ $errors->first('problem_code') }}</small>
          @endif
        </div>
      <div class="card-body">
        <div class="form-group">
          <label for="problem_name">Probem Name</label>
          <input type="input" class="form-control{{ $errors->has('problem_name') }}" id="problem_name" name="problem_name" placeholder="Enter Problem Name" value="{{ $problems->problem_name }}">
          @if ($errors->has('problem_name'))
              <small class="text-danger">{{ $errors->first('problem_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $problems->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group ">
        <label for="remarks">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $problems->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
      </div>
      <div class="form-group ">
        <label for="other">Other</label>
          <input type="text" class="form-control{{ $errors->has('other') }}" id="other" name="other" placeholder="Enter Other" value="{{ $problems->other }}">
          @if ($errors->has('other'))
              <small class="text-danger">{{ $errors->first('other') }}</small>
          @endif
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
    
    
  <!-- /.card -->
  @endsection