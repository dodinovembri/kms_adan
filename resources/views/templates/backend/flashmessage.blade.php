@if(session()->has('message'))
<div class="alert alert-success alert-dismissible mg-b-0 fade show" role="alert">
	{{ session()->get('message') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div><br>
@endif 
@if(session()->has('info'))
<div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
	{{ session()->get('info') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div><br>	
@endif
@if(session()->has('error'))
<div class="alert alert-warning alert-dismissible mg-b-0 fade show" role="alert">
	{{ session()->get('error') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div><br>
@endif