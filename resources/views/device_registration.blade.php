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
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="last_name" type="text" class="validate height_input">
          <label for="last_name">Vehicle Id</label>
	     </div> 
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="last_name" type="text" class="validate height_input">
          <label for="last_name">Registration Number</label>
	     </div> 
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="last_name" type="text" class="validate height_input">
          <label for="last_name">Protocol</label>
	     </div> 
	    </div>
	    
	    <div class="row form_input_div">
	     <div class="input-field col s12">
	      <input id="last_name" type="text" class="validate height_input">
          <label for="last_name">Entry Date</label>
	     </div> 
	    </div>
	 
        <div>
	    <button class="btn waves-effect waves-light submit_button" type="submit" name="action">Submit</button>
        </div>
      </div>
	</div>
	
   </div>
  </body>
</html>
