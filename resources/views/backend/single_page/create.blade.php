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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
							<form method="POST" action="{{ url($store) }}" enctype="multipart/form-data">
								@csrf
								<?php 
									$j = 0;
									foreach ($table_field as $key => $value) {
										$field_table = $value->Field;
										$field_type = $value->Type;
										$field_null = $value->Null;

									    if (in_array($key, $column_hidden)) { continue; }
									    if ($field_table == $field_first) { continue; }
									    if ($field_table == $field_break) { break; }

									    $field_each_name = preg_replace("/[^a-zA-Z]/", " ", $field_table); 
									    $arr_field_ori[] = $field_table;
									    $arr_field_name[] = $field_each_name;
									    $arr_field_type[] = $field_type;
									    $arr_field_null[] = $field_null;
									    $count = count($arr_field_name); 
								}

								for ($i=0; $i < $count; $i++) {
								    $text_ori = $arr_field_ori[$i]; 
								    $text_name = $arr_field_name[$i]; 
								    $text_type = $arr_field_type[$i]; 
								    $text_null = $arr_field_null[$i]; 
								    $text_check = substr($text_type,0,3);

								    if ($text_null == "NO") { $is_required = 1; }else{ $is_required = 0; }

								    if ($text_check == "big") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <?php if (isset($dropdown)) { $content = $dropdown_option[$j]; ?>
								                <select class="form-control col-xl-8 col-md-7" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?>>
								                    <option value="">Select</option>                    
								                    <?php foreach ($dropdown[$j] as $key => $value) { ?>
								                        <option value="{{$value->id}}">{{ $value->$content }}</option>
								                    <?php } ?>
								                </select>
								            <?php }else{ ?>
								                <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
								            <?php } ?>
								        </div>
								    <?php $j++; } else if ($text_check == "var" || $text_check == "nva") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
								        </div>
								    <?php } else if ($text_check == "tex") { ?>
								        <div class="form-group row editor-label">
								            <label class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <textarea class="form-control col-xl-8 col-md-7" rows="5" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> ></textarea>
								        </div>                                    
								    <?php } else if ($text_check == "int") { ?>
							            <div class="form-group row">
							                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
							                <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="number" min="0" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
							            </div>
								    <?php } else if ($text_check == "tin") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <select class="form-control col-xl-8 col-md-7" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?>>
								                <option value="1">Active</option>
								                <option value="0">Inactive</option>
								            </select>
								        </div>
								    <?php } elseif ($text_check == "dou") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
								        </div>                                        
								    <?php } elseif ($text_check == "cha") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <input type="file" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
								        </div> 
								    <?php } elseif ($text_check == "dat") { ?>
								        <div class="form-group row">
								            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
								            <input type="date" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
								        </div> 
								    <?php } 
								} ?>
								<div class="form-group row editor-label">
								    <label class="col-xl-3 col-md-4"><span></span></label>
								    <div class="col-xl-8 col-md-7 editor-space">
								        <button type="submit" class="btn btn-primary">Save</button>
								        <a href="{{ url($index) }}"><button type="button" class="btn btn-secondary">Cancel</button></a>
								    </div>
								</div>                                
							</form>
						</div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div> <!-- end row -->

        </div><!-- container -->

        @include('templates.backend.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@endsection