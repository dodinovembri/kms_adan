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
      <li class="active">Users List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Servequal Value</h3>              
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php
            if ($total_responden[0]->total_responden == 0) {
              $total_responden[0]->total_responden = 1;
            }
            $gab = ($total[0]->actual / $total_responden[0]->total_responden ) - ($total[0]->hope / $total_responden[0]->total_responden) ?>
            <p>Kepuasan pelanggan di Ratu Photografy dilihat dari <b><i>( {{ $total_questionnaire[0]->total_questionnaire }} )</i></b> dimensi SERVQUAL memiliki nilai <u>Kepuasan</u> sebesar <b><i>( {{ $total[0]->actual / $total_responden[0]->total_responden }} )</i></b> dan nilai <u>Harapan</u> <b><i>( {{ $total[0]->hope / $total_responden[0]->total_responden }} )</i></b> . <br>Memiliki gab <b><i>( {{ $gab }} )</i></b>. </p>
            <?php if ($gab >= 0) { ?>
              <div class="alert alert-success alert-dismissible">
                <i class="icon fa fa-check"></i> Pelayanan dan kualitas jasa yang diberikan ratu sudah memuaskan
              </div>                                   
            <?php }else{ ?>
              <div class="alert alert-warning alert-diusmissible">
                <i class="icon fa fa-check"></i>   Gab ini terjadi akibat tidak terpenuhinya harapan pelanggan dengan kualitas jasa yang diberikan oleh Ratu Photografy Indralaya
              </div>                                   
            <?php } ?>

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