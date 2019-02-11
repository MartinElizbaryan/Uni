@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li><i class="fas fa-times-circle"></i> {{$error}}</li>
				@endforeach
			</ul>
		</div>
@endif

@if(session("success"))
		<div class="alert alert-success">
			<i class="fas fa-check"></i> {{session("success")}}
		</div>
@endif

@if(session("error"))
		<div class="alert alert-danger">
			<i class="fas fa-times-circle"></i> {{session("error")}}
		</div>
@endif



{{-- 


return redirect("/posts")->with("success","Done!")

 --}}