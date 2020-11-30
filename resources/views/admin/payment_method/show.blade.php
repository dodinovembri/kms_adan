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
        <li><a href="{{ route('admin.payment_method.index') }}">Payment Method List</a></li>
        <li class="active">Payment Method Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">payment_method Detail</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>Payment Method Name</label>
                  <input type="text" min="0" class="form-control" name="payment" value="{{ $payment_method->payment_name }}" placeholder="Enter ..." readonly>
                </div>                                                                               
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="name" readonly>{{ $payment_method->ket }}</textarea>
                </div>                                                                                                                       
                <a href="{{ route('admin.payment_method.index') }}"><button type="button" class="btn btn-info">Back to List</button></a>
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