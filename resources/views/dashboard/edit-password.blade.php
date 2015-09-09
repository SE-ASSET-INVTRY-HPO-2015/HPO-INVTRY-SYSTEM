@extends('layout.master')

@section('contents')
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Change Password</h3>
			  </div>
			  <div class="panel-body">
			   @foreach($datas as $data)
			    <form action="/updatePassword/{{ $data->id }}" method="POST">
			    	{!! csrf_field() !!}
			    	<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess">Password</label>
					  <input type="password" class="form-control" id="inputSuccess" name="password">
					</div>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
			    </form>
			    @endforeach
			  </div>
			</div>
		</div>
	</div>
@stop