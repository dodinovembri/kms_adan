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
        <li class="active">Edit Product</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Product</h3><br><br>
                @if(session()->has('error'))
                  <div class="alert alert-warning alert-dismissible">
                    <i class="icon fa fa-close"></i> {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                    
                  </div> 
                @endif   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">  
                @csrf                            
                <div class="form-group">
                  <label>SKU</label>
                  <input type="text" class="form-control" name="sku" value="{{ $product->sku }}" placeholder="Enter ..." readonly="">
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" min="0" class="form-control" name="name" value="{{ $product->name }}" placeholder="Enter ..." required>
                </div>      
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="id_category" required>
                    <option value="{{ $product->id_category }}">{{ $product->id_category }}</option>
                    <?php foreach ($category as $key => $value) { ?>
                      <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                    <?php } ?>                    
                  </select>
                </div>        
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" min="0" class="form-control" name="price" value="{{ $product->price }}" placeholder="Enter ..." required>
                </div> 
                <div class="form-group">
                  <label>Images</label>
                  <input type="file" min="0" class="form-control" name="photo" value="{{ asset('img') }}/{{ $product->image }}" placeholder="Enter ...">
                </div>                                                       
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="description">{{ $product->description }}</textarea>
                </div>                                                                                                                                                       
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <a href=""><button type="button" class="btn btn-danger">Cancel</button></a>

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