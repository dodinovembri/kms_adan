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
        <li><a href="{{ route('admin.order_status.index') }}">Order Status List</a></li>
        <li class="active">Order Status Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Order Status Detail</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" min="0" class="form-control" name="status" value="{{ $order_status->status }}" placeholder="Enter ..." readonly>
                </div>                                                                  
                <div class="form-group">
                  <label>Keternagan</label>
                  <textarea class="form-control" rows="6" name="ket" readonly>{{ $order_status->ket }}</textarea>
                </div>                                                                                                                       
                <a href="{{ route('admin.order_status.index') }}"><button type="button" class="btn btn-danger">Back to List</button></a>

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