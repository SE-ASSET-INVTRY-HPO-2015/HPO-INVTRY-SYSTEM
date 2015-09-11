@extends('layout.master')

@section('contents')
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Change Username</h3>
			  </div>
			  <div class="panel-body">
			    <form action="/updateUsername/{{ $datas->id }}" method="POST">
			    	{!! csrf_field() !!}
			    	<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess">Username</label>
					  <input type="text" class="form-control" id="inputSuccess" name="username">
					</div>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
			    </form>
			  </div>
			</div>
		</div>
	</div>
@stop