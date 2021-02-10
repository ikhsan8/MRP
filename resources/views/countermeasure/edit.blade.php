@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Problem</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('countermeasure.update', $countermeasures->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
        <div class="form-group">
          <label for="countermeasure_code">Problem Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('countermeasure_code') }}" id="countermeasure_code" name="countermeasure_code" placeholder="Enter Countermeasure code " value= "{{ $countermeasures->countermeasure_code }}">
          @if ($errors->has('countermeasure_code'))
              <small class="text-danger">{{ $errors->first('countermeasure_code') }}</small>
          @endif
        </div>
      <div class="card-body">
        <div class="form-group">
          <label for="countermeasure_name">Probem Name</label>
          <input type="input" class="form-control{{ $errors->has('problem_name') }}" id="countermeasure_name" name="countermeasure_name" placeholder="Enter Countermeasure Name" value="{{ $countermeasures->countermeasure_name }}">
          @if ($errors->has('countermeasure_name'))
              <small class="text-danger">{{ $errors->first('countermeasure_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $countermeasures->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group ">
        <label for="remarks">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $countermeasures->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
      </div>
      <div class="form-group ">
        <label for="other">Other</label>
          <input type="text" class="form-control{{ $errors->has('other') }}" id="other" name="other" placeholder="Enter Other" value="{{ $countermeasures->other }}">
          @if ($errors->has('other'))
              <small class="text-danger">{{ $errors->first('other') }}</small>
          @endif
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('countercountermeasure') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  </div>
    </div>
    
    
  <!-- /.card -->
  @endsection