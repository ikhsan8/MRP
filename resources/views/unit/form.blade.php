@extends('layouts.v_template')
@section('content')
<div class="row" style="padding: 10px;">
    <div class="col-lg-6">
        <div class="card card-primary ">
            <div class="card-header">
                <h3 class="card-title">Add Unit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('unit.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="unit_code">Unit Code</label>
                        <input type="input" class="form-control" id="unit_code" name="unit_code"
                            placeholder="Enter unit code">
                    </div>
                    <div class="form-group">
                        <label for="unit_name">Unit Name</label>
                        <input type="input" class="form-control" id="unit_name" name="unit_name"
                            placeholder="Enter unit name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input type="input" class="form-control" id="remarks" name="remarks"
                            placeholder="Enter remarks">
                    </div>
                    <div class="form-group">
                        <label for="other">Other</label>
                        <input type="input" class="form-control" id="other" name="other" placeholder="Enter other">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('unit') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Unit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('unit.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="unit_code">Unit Code</label>
                        <input type="input" class="form-control" id="unit_code" name="unit_code"
                            placeholder="Enter unit code">
                    </div>
                    <div class="form-group">
                        <label for="unit_name">Unit Name</label>
                        <input type="input" class="form-control" id="unit_name" name="unit_name"
                            placeholder="Enter unit name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input type="input" class="form-control" id="remarks" name="remarks"
                            placeholder="Enter remarks">
                    </div>
                    <div class="form-group">
                        <label for="other">Other</label>
                        <input type="input" class="form-control" id="other" name="other" placeholder="Enter other">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('unit') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /.card -->
@endsection
