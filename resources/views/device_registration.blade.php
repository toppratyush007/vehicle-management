<html>
  <head>
     <title>Vehicle info Web App</title>
	 
	 <!-- material Css CDN -->
	 
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
	 <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 
     <link rel="stylesheet" href="{{ url('css/style.css') }}">
	
  </head>
  
  <body class="content_center">
    <div class="backgroud_transparent"></div>
    <div class="background_page"></div>
    <!-- Container Block -->
	
	
   <div class = "container container_property">
    <div class = "row action_bar">
	   <div class="title">
           <img src="{{ url('images/softcloud_social_share.png') }}" width="160px">
       </div>
	</div>
	
    <div class="form_content">
       
      <div class="heading_form">
          <h5>Vehicle Registration</h5>
      </div>
	
	  <div class="border_form_content">
		  <form action="{{ url('register-vehicle') }}" method="post">
			  {!! csrf_field() !!}
			  @if($errors->count())
			  <div class="col row  s12 form_input_div">
				  <div class="error-box">
					  {{ $errors->first() }}
				  </div>
			  </div>
			  @endif
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="vehicle_id" name="vehicle_id" type="text" class=" height_input"  value="{{ $vehicleId }}">
			 <label for="vehicle_id">Vehicle Id</label>
	     </div>
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="registration_id" name="registration_id" type="text" class="validate height_input" value="{{ old('registration_id') }}">
          <label for="registration_id">Registration Number</label>
	     </div> 
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="protocol" name="protocol" type="text" class="validate height_input" value="{{ old('protocol') }}">
          <label for="protocol">Protocol</label>
	     </div> 
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
			 <label for="entry_date">Entry Date</label>
			 <input name="entry_date" id="entry_date" type="text" class="datepicker" value="{{old('entry_date')}}">
	     </div>
	    </div>
	 
        <div>
	    <button class="btn waves-effect waves-light submit_button" type="submit" name="action">Submit</button>
        </div>
		  </form>
      </div>
	</div>
   </div>
	<script>
		$(document).ready(function(){
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                closeOnSelect: true // Close upon selecting a date,
            });
		})
	</script>
  </body>
</html>
