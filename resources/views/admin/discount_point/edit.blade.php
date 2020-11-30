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
        <li><a href="{{ route('admin.discount_point.index') }}">Discount Points</a></li>
        <li class="active">Edit Discount Points</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Discount Points</h3><br><br>
                @if(session()->has('error'))
                  <div class="alert alert-warning alert-dismissible">
                    <i class="icon fa fa-close"></i> {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                    
                  </div> 
                @endif   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="{{ route('admin.discount_point.update', $discount_point->id) }}" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>Discount Points</label>
                  <input type="text" class="form-control" name="discount_point" value="{{ $discount_point->discount_point }}" placeholder="Enter ..." required="">
                </div>                                                      
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="ket">{{ $discount_point->ket }}</textarea>
                </div>                                                                                                                                                       
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.discount_point.index') }}"><button type="button" class="btn btn-danger">Cancel</button></a>

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