<div>
	<?php if (isset($show)) { ?>		
		<a href="{{url($show, $value->id)}}"><i class="fa fa-eye mr-2 font-success"></i></a>
	<?php } ?>
	<?php if (isset($edit)) { ?>
		<a href="{{url($edit, $value->id)}}"><i class="fa fa-edit mr-2 font-success"></i></a>
	<?php } ?>
	<?php if (isset($destroy)) { ?>
		<a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash"></i></a>		
	<?php } ?>
</div>