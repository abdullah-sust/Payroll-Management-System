@if($success = Session::get('success'))
    <div class="alert alert-success alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $success }}
	</div>
@endif

@if($error = Session::get('error'))
    <div class="alert alert-danger alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $error }}
	</div>
@endif

@if($warning = Session::get('warning'))
    <div class="alert alert-warning alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $warning }}
	</div>
@endif

@if($info = Session::get('info'))
    <div class="alert alert-info alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $info }}
	</div>
@endif

@if (!$errors->isEmpty())
<div class="alert alert-danger alert-dismissable fade in">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	@foreach($errors->all() as $error)
  		{{ $error }}<br/>
  	@endforeach
</div>
@endif