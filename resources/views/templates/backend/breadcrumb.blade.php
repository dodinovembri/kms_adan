<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">{{ $title }}</h4>
                    <ol class="breadcrumb">
                        <?php foreach ($breadcrumb as $key => $value) { ?>
                            <li class="breadcrumb-item {{ $value['is_active'] }}" <?php if ($value['is_active'] == "active") {?> aria-current="page"<?php } ?> >
                                <?php if ($value['is_active'] == "active") { ?>
                                    {{ $value['text'] }}
                                <?php }else{ ?>
                                    <a href="{{ url($value['link']) }}">{{ $value['text'] }}</a>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ol>
                </div><!--end col--> 
            </div><!--end row-->                                                              
        </div><!--end page-title-box-->
    </div><!--end col-->
</div><!--end row-->