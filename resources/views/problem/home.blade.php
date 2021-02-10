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
                            <h1><i class="fab fa-trello"></i>
                            <span class="brand-text font-weight-light" style="font-size:30px;"> <b> Problem </b></span>
                                    </h1> 
                                </a>
                            </div>
                          </div>
                         </h3>
                      </div>

               <!-- /.card-header -->
               <div class="card-body">
               <a href="{{route('problem.form')}}">
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
                    <th>Code Problem</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>remarks</th>
                    <th>other</th>
                    <th style=" width:15%;">action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @php
                         $no = 1;
                         @endphp
                      @foreach ($problem as $data_problem)
                      
                      <tr>
                      
                    <td>{{ $no++ }}</td>  
                    <td>{{ $data_problem->problem_code }}</td> 
                    <td>{{ $data_problem->problem_name }}</td>  
                    <td>{{ $data_problem->description }}</td>  
                    <td>{{ $data_problem->remarks }}</td>  
                    <td>{{ $data_problem->other }}</td>  

                    <td>
                      <a href="{{url('problem/'.$data_problem->id.'/edit/') }}">
                        <button class="btn btn-warning btn-sm text-white">
                            <i class="icon icon ion ion-edit"></i> Edit

                        </button>
                       </a>
                       <form style="display:inline !important; " action="{{ route('problem.destroy', $data_problem->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm  btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $data_problem->name }}?')">
                            <i class="far fa-trash-alt"></i> Delete
                        </button>
                       </form>
                      
                    </td>
                    

                    
                  </tr>
                  @endforeach
                  </tbody>
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

  