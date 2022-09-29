

		 {!! Form::open(array('url'=>'contactus', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


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

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#status").jCombo("{!! url('contactus/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
