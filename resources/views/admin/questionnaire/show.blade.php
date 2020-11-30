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
        <li><a href="{{ route('admin.questionnaire.index') }}">Questionnaire List</a></li>
        <li class="active">Questionnaire Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Questionnaire Detail</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="" enctype="multipart/form-data">  
                @csrf                                                                               
                <div class="form-group">
                  <label>Questions</label>
                  <textarea class="form-control" rows="6" name="description" readonly>{{ $questionnaire->questions }}</textarea>
                </div>                                                                                                                       
                <a href="{{ route('admin.questionnaire.index') }}"><button type="button" class="btn btn-success">Back to List</button></a>
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