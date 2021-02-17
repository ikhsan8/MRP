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
                            <span class="brand-text font-weight-light" style="font-size:30px;"> <b> Suppliers </b></span>
                                    </h1> 
                                </a>
                            </div>
                          </div>
                         </h3>
                      </div>

               <!-- /.card-header -->
               <div class="card-body">
               <a href="{{route('suppliers.form')}}">
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
                    <th>Suppliera Code</th>
                    <th>Suppliera Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>website</th>
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
                      @foreach ($suppliers as $data_suppliers)
                      
                      <tr>
                      
                    <td>{{ $no++ }}</td>  
                    <td>{{ $data_suppliers->suppliers_code }}</td> 
                    <td>{{ $data_suppliers->suppliers_name }}</td> 
                    <td>{{ $data_suppliers->address }}</td>  
                    <td>{{ $data_suppliers->phone }}</td>  
                    <td>{{ $data_suppliers->email }}</td>  
                    <td>{{ $data_suppliers->website }}</td>  
                    <td>{{ $data_suppliers->description }}</td>  
                    <td>{{ $data_suppliers->remarks }}</td>  
                    <td>{{ $data_suppliers->other }}</td>  

                      
                    <td>
                      <a href="{{url('suppliers/'.$data_suppliers->id.'/edit/') }}">
                        <button class="btn btn-warning btn-sm text-white">
                            <i class="icon icon ion ion-edit"></i> Edit

                        </button>
                       </a>
                       <form style="display:inline !important; " action="{{ route('suppliers.destroy', $data_suppliers->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm  btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $data_suppliers->name }}?')">
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

  