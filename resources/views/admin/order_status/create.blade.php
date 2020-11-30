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
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.order_status.index') }}">Order Status List</a></li>
        <li class="active">Create Product</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Create Order Status</h3><br><br>
                @if(session()->has('error'))
                  <div class="alert alert-success alert-dismissible">
                    <i class="icon fa fa-close"></i> {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>               
                  </div> 
                @endif  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="{{ route('admin.order_status.store') }}" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" name="status" placeholder="Enter ..." required>
                </div>                                                      
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="6" name="ket"> </textarea>
                </div>                                                                                                                                                       
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.order_status.index') }}"><button type="button" class="btn btn-danger">Cancel</button></a>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->    

@endsection