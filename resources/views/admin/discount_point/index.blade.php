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
        <li class="active">Discount Point List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Discount Point List</h3><br><br>
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
                  <th>Discount Point</th>
                  <th>Keterangan</th>
                  <th>Created  By</th>                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0; foreach ($discount_point as $key => $value) { $no++; ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td>{{ $value->discount_point }} %</td>
                    <td>{{ $value->ket }}</td>
                    <td>{{ $value->created_by }}</td>                                  
                    <td>                      
                      <a href="{{ route('admin.discount_point.edit', $value->id) }}"><i class="fa fa-edit"></i></a>                                                        
                    </td>
                  </tr>
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