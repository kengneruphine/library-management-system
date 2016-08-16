<?php
require('header.php')
?>
</br>	
       <div class="row">
            	
               <form class="col s7" id="form1">
			   
             	<div class="row">
				 <h3>Fill The Form Below To Contact Us</h3>
				   <div class="input-field col s4">
				     <i class="material-icons prefix">account_circle</i>
					 <input value="" id="icon_prefix" type="text" class="validate">
					 <label  class="active"for="icon_prefix">Name</label>
				    </div>
	
                      <div class="input-field col s3">
				     <i class="material-icons prefix">phone</i>
					 <input value="" id="icon_telephone" type="tel" class="validate">
					 <label class="active"for="icon_telephone">Telephone</label>
				    </div>
                </div>
				 
				
               <div class="row">				
					   <div class="input-field col s7">
				     <i class="material-icons prefix">email</i>
					 <input  value=""id="icon_prefix" type="text" class="validate">
					 <label class="active"for="icon_prefix">Email</label>
				    </div>
				</div>	

				<div class="row">
					  <div class="input-field col s7">
				     <i class="material-icons prefix">subtitles</i>
					 <input value="" id="icon_prefix" type="text" class="validate">
					 <label class="active" for="icon_prefix">Subject</label>
				    </div>
				</div>	
				
				<div class=row>
					 <div class="input-field col s7">
				     <i class="material-icons prefix">mode_edit</i>
					 <textarea  value="" id="textarea1" type="text" class="materialize-textarea" length="1000"></textarea>
					 <label  class="active"for="textarea1">Your Message</label>
				    </div>
					</div>
			
                       <Button class=" btn indigo accent-1 col s3 offset-s5" type="submit" name="action">Post
                       <i class="material-icons right">send</i></button>					   
              </form>
           	


           <div class="row">
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image" style="background-image:url(css/images/Gmap.png)">
			<div id="map" style="width:451px;height:380px;">
				<script type="text/javascript">
				  function initMap(){
				  	var mapDiv = document.getElementById('map');
				  	var map = new google.maps.Map(mapDiv, {
				  		center:{lat :44.540,lng: -78.546},
				  		zoom: 8;
				  		
				  	})

				  }
				  </script>
				  <script async defer
				     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUaHIlVMT3DDEoLaXygAYNopkAW8fly&callback=initMap"
                   >
                   </script>
			</div>
              
              <span class="card-title">Locate Us here</span>
            </div>
            <div class="card-content">
              <p> Telephone: (+237)675-734-571</br>
			               Email: ruphinekengne@gmail.com
                   
				   </p>
            </div>
          </div>
        </div>
      </div>
     </div>       
   </div>
</br>




	  
	<?php

	require('footer.php')
	?>
		
		 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
         <script type="text/javascript" src="js/materialize.min.js"></script>
         <!--<script type="text/javascript" src="js/gmap.js"></script>
		 <script type="text/javascript" src="js/map.js"></script>
		 <script src="http://maps.googleapis.com/maps/api/js"></script> -->

</body>
</html>