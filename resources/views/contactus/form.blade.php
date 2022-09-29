@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'contactus?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Contact Us</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="City" class=" control-label col-md-4 text-left"> City </label>
										<div class="col-md-6">
										  
					<?php $city = explode(',',$row['city']);
					$city_opt = array( 'Newyork City' => 'Newyork City' ,  'Los Angeles' => 'Los Angeles' ,  'San Fransisco' => 'San Fransisco' ,  'Chicago' => 'Chicago' ,  'San Jose' => 'San Jose' , ); ?>
					<select name='city' rows='5'   class='select2 '  > 
						<?php 
						foreach($city_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['city'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Office Description" class=" control-label col-md-4 text-left"> Office Description </label>
										<div class="col-md-6">
										  <textarea name='office_description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['office_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Contact Description" class=" control-label col-md-4 text-left"> Contact Description </label>
										<div class="col-md-6">
										  <textarea name='contact_description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['contact_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Working Description" class=" control-label col-md-4 text-left"> Working Description </label>
										<div class="col-md-6">
										  <textarea name='working_description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['working_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Map" class=" control-label col-md-4 text-left"> Map </label>
										<div class="col-md-6">
										  
				<div id='map-map_marker' style='height: 200px;'></div>
				<input  type='text' name='map' id='map' value='{{ $row['map'] }}' 
						     class='form-control  ' />
				{!! SiteHelpers::showFormMaps( $row['map'] , 'map-map_marker' ) !!}		
						 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#status").jCombo("{!! url('contactus/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("contactus/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop