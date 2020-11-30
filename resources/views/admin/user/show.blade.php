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
        <li><a href="{{ route('admin.user.index') }}">User List</a></li>
        <li class="active">User Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">User Detail</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="{{ $user[0]->name }}" placeholder="Enter ..." required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="{{ $user[0]->email}}" placeholder="Enter ..." required>
                </div>                                                                                                                     
                <div class="form-group">
                  <label>Points Value</label>
                  <input type="text" class="form-control" name="email" value="Rp. {{ number_format($user[0]->points, 0, ',', '.') }}" placeholder="Enter ..." required>
                </div>                
                <a href="{{ route('admin.user.index') }}"><button type="button" class="btn btn-danger">Back to List</button></a>

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