@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Product List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3><br><br>
               <a href="{{ route('admin.product.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button></a>
              <br><br>
                @if(session()->has('message'))
                  <div class="alert alert-success alert-dismissible">
                    <i class="icon fa fa-check"></i>  {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                    
                  </div> 
                @endif 
                @if(session()->has('error'))
                  <div class="alert alert-warning alert-dismissible">
                    <i class="icon fa fa-close"></i> {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                    
                  </div> 
                @endif                                                                     
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>SKU</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0; foreach ($product as $key => $value) { $no++; ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><u><b><a href="{{ route('admin.product.show', $value->sku) }}">{{ $value->sku }}</a></b></u></td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->category_name }}</td>
                    <td>{{ $value->price }}</td>                    
                    <td>                      
                      <a href="{{ route('admin.product.edit', $value->id) }}"><i class="fa fa-edit"></i></a> -                                                         
                      <a data-toggle="modal" data-target="#modal-danger-{{ $value->id }}" href="javascript::"><i class="fa  fa-trash-o"></i></a>
                    </td>
                  </tr>

                  <div class="modal modal-danger fade" id="modal-danger-{{ $value->id }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Delete Data</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure want to delete this record ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <form method="POST" action="{{ route('admin.product.destroy', $value->id) }}">
                            @csrf
                          <button type="submit" class="btn btn-outline">Delete</button>                          
                          </form>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                <?php } ?>                               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection