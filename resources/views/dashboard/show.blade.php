@extends('layout.master')

@section('contents')
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
			  <p class="list-group-item active">Account Information</p>
			  <p class="list-group-item">Full Name    : &nbsp  {{ $infos->name }}
			  </p>
			  <p class="list-group-item">Username     : &nbsp  {{ $infos->username }} 
			  </p>
			  <p class="list-group-item">Account Type : &nbsp  
			  	@foreach($name as $data)
					{{ $data->name }}
				@endforeach
			  </p>
			</div>
			<a href="/editUsername/{{ $infos->id }}" class="btn btn-sm btn-primary">Edit Username</a>
			<a href="/editPassword/{{ $infos->id }}" class="btn btn-sm btn-primary">Edit Password</a>	
		</div>
	</div>
@stop