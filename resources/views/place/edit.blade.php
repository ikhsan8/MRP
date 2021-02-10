@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Place</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('place.update', $places->id) }}" enctype="multipart/form-data">        @csrf
    @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="place_code">Place Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('place_code') }}" id="place_code" name="place_code" placeholder="Enter Place Name" value="{{ $places->place_code }}">
          @if ($errors->has('place_code'))
              <small class="text-danger">{{ $errors->first('place_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="place_name">Place Name</label>
          <input type="input" class="form-control{{ $errors->has('place_name') }}" id="place_name" name="place_name" placeholder="Enter Place Name" value="{{ $places->place_name }}">
          @if ($errors->has('place_name'))
              <small class="text-danger">{{ $errors->first('place_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $places->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group ">
        <label for="remarks">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $places->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
      </div>
      <div class="form-group ">
        <label for="other">Other</label>
          <input type="text" class="form-control{{ $errors->has('other') }}" id="other" name="other" placeholder="Enter Other" value="{{ $places->other }}">
          @if ($errors->has('other'))
              <small class="text-danger">{{ $errors->first('other') }}</small>
          @endif
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('place.home') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  <!-- /.card -->
  @endsection