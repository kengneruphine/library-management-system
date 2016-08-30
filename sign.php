<?php
require('header.php')
?>
</br>
</br>
</br>
            <h5 class="center-align">Fill the form</h5>
 
   	<div class="row">
	  <div class="col s3">.</div>
	  
	       <form ng-app="myApp" class="col s6 z-depth-2" action="log.php" method="POST" ng-controller="validateCtrl" 
          name="myForm" novalidate>
         <div class="row">
              <div class="col s2">.</div>
              <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                  <input type="text" name="email" ng-model="email" placeholder="email" required>
                  <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                  <span ng-show="myForm.email.$error.required">email is required.</span>
                  <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                  </span>
                 <label  class="active" for="name">Email</label>
               </div>
		         </div>
		
	       <div class="row">
            <div class="col s2">.</div>
		        <div class="input-field col s6">
                 <i class="material-icons prefix">lock</i>
                     <input type="password"  name="password" ng-model="password" placeholder="password" required>
                     <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid">
                     <span ng-show="myForm.password.$error.required">password is required.</span>
                     </span>
                     <label  class="active" for="password">Password</label>
                 </div>
              </div>
	  
	       <div class="row">
		         <div class="col s2">.</div>
	           <div class="input-field col s3">
		             <button  class=" btn indigo darken-1" type="submit" ng-disabled="myForm.email.$invalid || myForm.password.$invalid" name="action">login</button>
                </div>

          <div class="col s1">.</div>
		          <div class="input-field col s3">
                  <a href="#" class=" btn indigo darken-1" type="submit" name="action">Cancel</a>
             </div>
		     </div> 
      </br>



       <div class="row">
            <div class="col s1">.</div>
                <div class="input-field col s3">
                      <a class="modal-trigger" href="#modal1">Register Now</a>
               </div>

           <div class="col s3">.</div>
               <div class="input-field col s3">
                     <a href="#">Forgot Password</a>
               </div>
      </div>
 </form>
</div>
</div>



  <!-- Modal Structure -->
       <div class="row">
           <div id="modal1" class=" col s6 offset-s3 modal">
           <div class="modal-content">

  	       <div class="row">
	             <form ng-app="myApp" class="col s12" class="col s6 z-depth-2" action="create.php" method="POST" ng-controller="validateCtrl" 
                     name="myForm" novalidate>

                   <div class="row">
                        <div class="input-field col s6">
                           <i class="material-icons prefix">account_circle</i>
                              <input value="" id="icons_prefix" type="text" class="validate" name="user" ng-model="user" required>
                              <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                              <span ng-show="myForm.user.$error.required"></span>
                              </span>
                               <label  class="active" for="name">first_Name</label>
                        </div>
		               </div>

		              <div class="row">
                      <div class="input-field col s6">
                         <i class="material-icons prefix">account_circle</i>
                           <input value="" id="name" type="text" class="validate" name="lname" ng-model="lname"  required>
                              <span style="color:red" ng-show="myForm.lname.$touched && myForm.lname.$invalid">
                              <span ng-show="myForm.lname.$error.required"></span>
                              </span>
                           <label  class="active" for="name">last_Name</label>
                       </div>
                  </div>

	                 <div class="row">
		                    <div class="input-field col s6">
                           <i class="material-icons prefix">assignment</i>
                             <input value="" id="department" type="text" class="validate" name="dept" ng-model="dept"  required>
                              <span style="color:red" ng-show="myForm.dept.$touched && myForm.dept.$invalid">
                              <span ng-show="myForm.dept.$error.required"></span>
                              </span>
                             <label class="active" for="department">Department</label>
                        </div>
                   </div>
	  
                   <div class="row">
		                     <div class="input-field col s6">
                             <i class="material-icons prefix">assignment</i>
                                <input value="" id="faculty" type="text" class="validate" name="fac" ng-model="fac" required>
                                  <span style="color:red" ng-show="myForm.fac.$touched && myForm.fac.$invalid">
                                  <span ng-show="myForm.fac.$error.required"></span>
                                  </span>
                                <label  class="active" for="faculty">Faculty</label>
                        </div>
                   </div>
	  
	                 <div class="row">
		                    <div class="input-field col s6">
                           <i class="material-icons prefix">email</i>
                             <input type="email" name="email" ng-model="email" placeholder="email" required>
                             <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                             <span ng-show="myForm.email.$error.required"></span>
                             <span ng-show="myForm.email.$error.email"></span>
                             </span>
                             <label class="active" for="email">Email</label>
                       </div>
                   </div>
	  
	                  <div class="row">
		                     <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                              <input type="password" name="password" ng-model="password" placeholder="password" required>
                              <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid">
                              <span ng-show="myForm.password.$error.required"></span>
                              </span>
                              <label  class="active" for="password">Password</label>
                          </div>
                    </div>
		     </div>
     <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect">
       	           <button class="btn indigo darken-1" type="submit" ng-disabled=" myForm.user.$invalid ||  
                       myForm.password.$invalid ||  myForm.lname.$invalid || myForm.dept.$invalid ||myForm.fac.$invalid "> create</button></a>


	             <a href="#" class="modal-close"><button class="btn indigo darken-1">cancel</button></a>  
   </div> 
   </form>
	</div>
  </div>
  </div>
  </div>

     <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/angular.min.js"></script>

      <script type="text/javascript">
		$(document).ready(function (){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

  <script>
      var app = angular.module('myApp', []);
       app.controller('validateCtrl', function($scope) {
       $scope.user = '';
       $scope.password = '';
      
});

</script>

	</body>
	</html>