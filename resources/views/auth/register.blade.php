@extends('layout.master')

 @section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@stop

@section('contents')
	<div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <div class="row-fluid user-row">
                        <img src="https://c1.staticflickr.com/3/2361/5817626386_d3c0db3a02_b.jpg" class="img-responsive" alt="Conxole Admin"/>
                    </div>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin" action="{{ action('Auth\AuthController@postRegister') }}" method="POST">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            {!! csrf_field() !!}
                            <input class="form-control" placeholder="Full Name" id="username" name="name" type="text">
                            <input class="form-control" placeholder="Username" id="username" name="username" type="text">
                            <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                            <input class="form-control" placeholder="Confirm Password" id="username" name="password_confirmation" type="password">
                            <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Account</label>
                              {{-- <div class="col-lg-10"> --}}
                                <select class="form-control" id="username" name="acctypes_id">
                                    @foreach($datas as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <br>
                            <input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="Submit »">
                            <a href="/" class="btn btn-lg btn-primary btn-block" id="login">Login Page »</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
	    $(document).mousemove(function(event) {
	        TweenLite.to($("body"), 
	        .5, {
	            css: {
	                backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px",
	            	"background-position": parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / 12) + "px, " + parseInt(event.pageX / 15) + "px " + parseInt(event.pageY / 15) + "px, " + parseInt(event.pageX / 30) + "px " + parseInt(event.pageY / 30) + "px"
	            }
	        })
	    })
})

	</script>
@stop