@extends('layouts.v_template')

@section('content')
    
<div class="">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="page-header">
                <div class="page-title">
                    <h3><i data-feather="archive"></i> </h3>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12 mg-b-20">
                    <div class="card">
                        <div class="br-section-wrapper" style="padding: 30px 20px">
                            <div>
                            <h1><i class="fas fa-swatchbook nav-icon"></i>
                            <span class="brand-text font-weight-light" style="font-size:30px;"> <b> Title </b></span>
                                 <a href="{{ route('title.create') }}"> 
                                    
                                    </h1> 
                                </a>
                            </div>
                          </div>
                        </h3>
                      </div>

              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ route('title.create') }}">
              <button class="btn btn-sm btn-info float-right">
                 <i class="icon ion ion-ios-plus-outline"></i>
                   New Data
                    </button>
                  </a>  
                      </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Title Code</th>
                    <th>Title Name</th>
                    <th>Description</th>
                    <th>Remarks</th>
                    <th>Others</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @php
                         $no = 1;
                         @endphp
                      @foreach ($title as $data_title)
                      
                      <tr>
                      
                    <td>{{ $no++ }}</td>  
                    <td>{{ $data_title->title_code }}</td>  
                    <td>{{ $data_title->title_name }}</td>  
                    <td>{{ $data_title->description }}</td>  
                    <td>{{ $data_title->remarks }}</td>  
                    <td>{{ $data_title->others }}</td>  
                    <td>
                      <a href="{{ route('title.edit', $data_title->id) }}">
                        <button class="btn btn-warning btn-sm text-white">
                            <i class="icon icon ion ion-edit"></i> Edit

                        </button>
                       </a>
                       <form action="{{ route('title.destroy', $data_title->id) }}" method="POST">
                        @method('delete')
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm mt-3 btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $data_title->title_name }}?')">
                            <i class="far fa-trash-alt"></i> Delete
                        </button>
                       </form>
                      
                    </td>

                    
                  </tr>
                  @endforeach
                  </tbody>
                  {{-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS title</th>
                  </tr>
                  </tfoot> --}}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
  