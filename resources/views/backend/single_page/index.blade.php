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
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <?php foreach ($table_field as $key => $value) {
                        					$field_table = $value->Field;
                        					$field_type = $value->Type;
                                            if (in_array($key, $column_hidden)) {
                                                continue;
                                            }
                                            if ($field_table == $field_first){
                        		                continue;
                        		            }
                                            if ($field_table == $field_break){
                                                break;
                                            }                                    
                                            $column_name = preg_replace("/[^a-zA-Z]/", " ", $field_table) ?>
                                            <th>{{ ucfirst($column_name) }}</th>
                                            <?php 
                                            $arr_field[] = $field_table;
                                            $count = count($arr_field); 
                                        } ?>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($table_data as $key => $value) { ?>
                                        <tr>
                                            <?php for ($i=0; $i < $count; $i++) {
                                                if (in_array($i, $column_of_key)) {
                                                    $clean_string_text = $value->$name_of_key->$name_foreign;
                                                }else{
                                                    $clean_string = $arr_field[$i];
                                                    $clean_string_text = $value->$clean_string;
                                                }
                                                ?>   
                                                <td>{{ $clean_string_text }}</td>
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
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

        @include('templates.backend.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@endsection