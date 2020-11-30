<div class="modal fade" id="modal1{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Delete Confirm</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i data-feather="x"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<p class="mg-b-0">Are you sure want to delete this item?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary rounded-5" data-dismiss="modal">Cancel</button>
				<?php if (isset($destroy)) {
					$destroy = $destroy;
				}else{
					$destroy = "::";
				} ?>
				<a href="{{ url($destroy, $value->id) }}"><button type="button" class="btn btn-dark rounded-5">Delete</button></a>
			</div>
		</div>
	</div>
</div>