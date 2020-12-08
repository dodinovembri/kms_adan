@extends('layouts.backend')

@section('content')        

@include('templates.backend.sidebar')

<div class="page-wrapper">
    @include('templates.backend.header')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            @include('templates.backend.breadcrumb')
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('templates.backend.flashmessage')
                            <?php if (isset($create)) { ?>
                                <a href="{{ url($create) }}"><button type="button" class="btn btn-primary">{{ $text_add }}</button></a><br><br>
                            <?php } ?>
                            <div class="table responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <?php foreach ($table_field as $key => $value) {
                                            if (in_array($key, $column_hidden)) {
                                                continue;
                                            }                                        
                                            if ($value->Field == $field_break){
                                                break;
                                            }                                    
                                            $string = preg_replace("/[^a-zA-Z]/", " ", $value->Field) ?>
                                            <th>{{ ucfirst($string) }}</th>
                                            <?php 
                                            $arr_field[] = $value->Field;
                                            $count = count($arr_field); 
                                        } ?>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($table_data as $key => $value) { ?>
                                        <tr>
                                            <?php for ($i=0; $i < $count; $i++) {
                                                $clean_string = $arr_field[$i];
                                                ?>   
                                                <td>{{ substr($value->$clean_string, 0,50) }}</td>
                                            <?php } ?>                                            
                                            <td>
                                                @include('templates.backend.action')
                                            </td>
                                        </tr> 
                                        @include('templates.backend.deleteconfirm')                                       
                                    <?php } ?>                                   
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

        @include('templates.backend.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@endsection