<?php
require('header.php')
?>
</br>	
       <div class="row">
            	
               <form ng-app="myApp" class="col s7"  ng-controller="validateCtrl" 
name="myForm" novalidate>
			   
             	<div class="row">
				 <h3>Fill The Form Below To Contact Us</h3>
				   <div class="input-field col s4">
				          <i class="material-icons prefix">account_circle</i>
				               <input type="text" name="user" ng-model="user" required>
                               <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                               <span ng-show="myForm.user.$error.required">Name is required.</span>
                               </span>
					 <label  class="active" for="icon_prefix">Name</label>
				    </div>
	
                      <div class="input-field col s3">
				             <i class="material-icons prefix">phone</i>
					            <input type="tel"  name="phoneNo" ng-model="phoneNo" required>
					           <span style="color:red" ng-show="myForm.phoneNo.$touched && myForm.phoneNo.$invalid">
                               <span ng-show="myForm.phoneNo.$error.required">phone number is required.</span>
                               </span>
					         <label class="active" for="icon_telephone">Telephone</label>
				    </div>
                </div>
				 
				
               <div class="row">				
					   <div class="input-field col s7">
				     <i class="material-icons prefix">email</i>
					 <input type="email" name="email" ng-model="email" required>
                          <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                           <span ng-show="myForm.email.$error.required">Email is required.</span>
                             <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                               </span>
					 <label class="active" for="icon_prefix">Email</label>
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
					    <textarea  value="" id="textarea1" type="text" name="message" ng-model="message" required class="materialize-textarea" length="1000"></textarea>
                           <span style="color:red" ng-show="myForm.message.$touched && myForm.message.$invalid">
                            <span ng-show="myForm.message.$error.required">your message is required.</span>
                             </span>
                          <label  class="active" for="textarea1">Your Message</label>
				    </div>
					</div>
			
                       <Button class=" btn indigo darken-1 col s3 offset-s5" type="submit" ng-disabled="myForm.user.$touched && myForm.user.$invalid ||  
myForm.email.$touched && myForm.email.$invalid || myForm.phoneNo.$touched && myForm.phoneNo.$invalid" name="action">submit
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
         <script type="text/javascript" src="js/angular.min.js"></script>
         <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = '';
    $scope.email = '';
    $scope.phoneNo = '';
    $scope.message = '';
});
</script>

</body>
</html>