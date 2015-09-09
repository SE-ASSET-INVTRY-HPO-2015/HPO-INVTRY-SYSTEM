@extends('layout.master')
@section('contents')
	<div class="row">
	@include('flash::message')
		{{-- Jumbotron With Modal--}}
		<div class="dash-jumbo">
		    <div class="jumbotron" align="center">
		        <h2>Welcome {{ auth()->user()->name }} to HPO Asset Inventory</h2>
		        <p>To help yourself click learn more to know more.</p>
		        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#learn">Learn More</a>
		    </div>
		</div>
	</div>

	{{-- Modal #Jumbotron --}}
	<div class="modal fade" id="learn">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                <h4 class="modal-title">Dashboard Information</h4>
	            </div>
	            <div class="modal-body">
	                <p>All Vacant, Defective and Pulled-out assets are displayed in the homepage which is the dashboard. You cannot update anything in this page unless you navigate to view all assets. Only Admin Users are allowed to edit and update assets thank you.</p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	            </div>
	        </div>
	    </div>
	</div>
@stop