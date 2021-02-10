@extends('layouts.v_template')
@section('content')
<div class="card card-primary col-6 ml-4">
    <div class="card-header">
      <h3 class="card-title">Edit Departement</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('departement.update', $departements->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="departement_code">Departement Code</label>
          <input type="input" disabled class="form-control{{ $errors->has('departement_code') }}" id="departement_code" name="departement_code" placeholder="Enter departement Code" value="{{ $departements->departement_code }} ">
          @if ($errors->has('departement_code'))
              <small class="text-danger">{{ $errors->first('departement_code') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="departement_name">Departement Name</label>
          <input type="input" class="form-control{{ $errors->has('departement_name') }}" id="departement_name" name="departement_name" placeholder="Enter departement Name" value="{{ $departements->departement_name }}">
          @if ($errors->has('departement_name'))
              <small class="text-danger">{{ $errors->first('departement_name') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control{{ $errors->has('description') }}" id="description" name="description" placeholder="Enter Description" value="{{ $departements->description }}">
          @if ($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Remarks</label>
          <input type="text" class="form-control{{ $errors->has('remarks') }}" id="remarks" name="remarks" placeholder="Enter remarks" value="{{ $departements->remarks }}">
          @if ($errors->has('remarks'))
              <small class="text-danger">{{ $errors->first('remarks') }}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="others">Others</label>
          <input type="text" class="form-control{{ $errors->has('others') }}" id="others" name="others" placeholder="Enter others" value="{{ $departements->others }}">
          @if ($errors->has('others'))
              <small class="text-danger">{{ $errors->first('others') }}</small>
          @endif
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('departement') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      </div>
    </form>
  </div>
  <!-- /.card -->
  @endsection