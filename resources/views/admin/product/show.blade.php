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
        <li><a href="{{ route('admin.product.index') }}">Product List</a></li>
        <li class="active">Product Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Product Detail</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>SKU</label>
                  <input type="text" class="form-control" name="sku" value="{{ $product->sku }}" placeholder="Enter ..." readonly>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" min="0" class="form-control" name="name" value="{{ $product->name }}" placeholder="Enter ..." readonly>
                </div>             
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" min="0" class="form-control" name="price" value="{{ $product->category }}" placeholder="Enter ..." readonly>
                </div>                 
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" min="0" class="form-control" name="price" value="{{ $product->price }}" placeholder="Enter ..." readonly>
                </div> 
                <div class="form-group">
                  <label>Images</label> <br>  
                  <img src="{{ asset('img') }}/{{ $product->image }}" width="20%">
                </div>                                                       
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="description" readonly>{{ $product->description }}</textarea>
                </div>                                                                                                                       

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