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
        <li class="active">Customers Order List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customers Order List</h3>
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
                  <th>Order ID</th>
                  <th>User Name</th>
                  <th>Status</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0; foreach ($order as $key => $value) { $no++; ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><u><b><a href="">RT00-{{ $value->order_id }}</a></b></u></td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->ket_status }}</td>
                    <td>Rp. {{ number_format($value->total_price, 0, ',', '.') }}</td>                    
                    <td>                                                                          
                      <a data-toggle="modal" data-target="#modal-info-{{ $value->id }}" href="javascript::"><i class="fa  fa-edit"></i></a>
                    </td>
                  </tr>

                  <div class="modal modal-info fade" id="modal-info-<?php echo $value->id ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Update Status Order</h4>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="{{ route('admin.order.update', $value->id) }}">
                            @csrf
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                              <option value="">Select</option> 
                              <?php foreach ($orderstatus as $key => $value) { ?>
                                <option value="{{ $value->id }}">{{ $value->status }}</option>
                              <?php } ?>                                                           
                            </select>
                          </div>                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline">Update Data</button>                          
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