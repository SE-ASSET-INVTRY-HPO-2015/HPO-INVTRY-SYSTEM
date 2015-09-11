@extends('layout.master')

@section('contents')
	<div class="row">
		<div class="col-sm-8">
		<div class="well bs-component">
			<form class="form-horizontal">
			  <fieldset>
			    <legend>Asset Information</legend>

			    {{-- Brand --}}
				
				    <div class="form-group">
				      <label for="select" class="col-lg-2 control-label">Brand</label>
				      <div class="col-lg-10">
				        <select class="form-control" id="select">
				        @foreach($brands as $brand)
				          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
				        @endforeach
				        </select> 
				      </div>
				    </div>
					
			    {{-- Model --}}

			    	<div class="form-group">
				      <label for="inputModel" class="col-lg-2 control-label">Model</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Model">
				      </div>
				    </div>

			    {{-- Categories --}}

			    	<div class="form-group">
				      <label for="select" class="col-lg-2 control-label">Categories</label>
				      <div class="col-lg-10">
				        <select class="form-control" id="select">
				        @foreach($categories as $category)
				          <option value="{{ $category->id }}">{{ $category->name }}</option>
				        @endforeach
				        </select> 
				      </div>
				    </div>

			    {{-- Description or Specifications --}}

			    	<div class="form-group">
				      <label for="textArea" class="col-lg-2 control-label">Description</label>
				      <div class="col-lg-10">
				        <textarea class="form-control" rows="3" id="textArea"></textarea>
				        <span class="help-block">Please be specific about the Description or the Specification of the Asset</span>
				      </div>
				    </div>

			    {{-- Control Number --}}

			    	<div class="form-group">
				      <label for="inputCNTRL" class="col-lg-2 control-label">Control Number</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Control Number">
				      </div>
				    </div>

			    {{-- Serial Number --}}

			    	<div class="form-group">
				      <label for="inputSRL" class="col-lg-2 control-label">Serial Number</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Serial Number">
				      </div>
				    </div>

			    {{-- Physical Status --}}

			    	<div class="form-group">
				      <label for="select" class="col-lg-2 control-label">Physical Status</label>
				      <div class="col-lg-10">
				        <select class="form-control" id="status">
				        @foreach($physicalstatuses as $physicalstatus)
				          <option value="{{ $physicalstatus->id }}">{{ $physicalstatus->name }}</option>
				        @endforeach
				        </select> 
				      </div>
				    </div>

				    <div class="form-group" id="description">
				      <label for="textArea" class="col-lg-2 control-label">Defective Information</label>
				      <div class="col-lg-10">
				        <textarea class="form-control" rows="3" id="textArea"></textarea>
				        <span class="help-block">State the problem about the defective asset.</span>
				      </div>
				    </div>

			    {{-- Warranty --}}

			    	<div class="form-group">
				      <label for="select" class="col-lg-2 control-label">Warranty</label>
				      <div class="col-lg-10">
				        <select class="form-control" id="warranty">
				        @foreach($warranties as $warranty)
				          <option value="{{ $warranty->id }}">{{ $warranty->name }}</option>
				        @endforeach
				        </select> 
				      </div>
				    </div>

			    {{-- Warranty End --}}

				    <div class="form-group" id="warrantyEnd">
		            <label for="select" class="col-lg-2 control-label">Warranty End</label>
		            <div class="col-lg-10">
		              <div class='input-group date' id='datetimepicker3'>
		                <input type='text' class="form-control" name="warranty_end">
		                <span class="input-group-addon">
		                  <span class="glyphicon glyphicon-time"></span>
		                </span>
		              </div>
		            </div>
		          </div>


			      <div class="col-lg-10 col-sm-offset-2">
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript">

		$(document).ready(function(){
		    $('#datetimepicker3').datetimepicker({
		      format: 'YYYY-MM-DD'
		    });

		    	$('#warranty').on('change', function() {
  					var hide = jQuery(this).val();
		    		if(hide == 1){
					$("#warrantyEnd").css("display", "inline");
		    		}
		    		else{	
		    		$("#warrantyEnd").css("display", "none");	
		    		}
				});

				$('#status').on('change', function() {
  					var hide = jQuery(this).val();
		    		if(hide == 2){
					$("#description").css("display", "inline");
		    		}
		    		else{	
		    		$("#description").css("display", "none");	
		    		}
				});
});

	</script>
@endsection