<?php
require('header.php')
?>
</br>
</br>
</br>

    <h5 class="center-align">Fill the form</h5>
 
	<div class="row">
	  <div class="col s3">.</div>
	  
	<form class="col s6 z-depth-2" action="" method="">
      <div class="row">
      <div class="col s2">.</div>
        <div class="input-field col s6">
          <input value="" id="name" type="text" class="validate">
          <label  class="active" for="name">Full Name</label>
        </div>
		</div>
		
	  
	   <div class="row">
     <div class="col s2">.</div>
		<div class="input-field col s6">
          <input  value="" id="password" type="password" class="validate">
          <label  class="active" for="password">Password</label>
        </div>
      </div>
	  
	    <div class="row">
		 <div class="col s2">.</div>
	  
	    <div class="input-field col s3">
		<a href="afterlogin.php" class=" btn indigo darken-1" type="submit" name="action">login</a>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>&nbsp;&nbsp;&nbsp;
          <div class="col s1">.</div>
		     <div class="input-field col s3">
   
          <a href="#" class=" btn indigo darken-1" type="submit" name="action">Cancel</a>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>
		  </div> 
      </br>
      <!--<div class=input-field col s3>
      <p class\'.|="margin medium-small"><a class="modal-trigger" href="#modal1">forgot password</a></p>
      <p class="margin right-align medium-small"><a href="#">Forget password</a></p>
      </div>
       
      <div class="col s3">
         <a href="#">Register now</a>
            </div>
      </div>-->



      <div class="row">
     <div class="col s1">.</div>
    
      <div class="input-field col s3">
    <a class="modal-trigger" href="#modal1">Register Now</a>
        <!-- <i class="material-icons right">send</i>-->
         
          </div>&nbsp;&nbsp;&nbsp;
         <div class="col s3">.</div>
         <div class="input-field col s3">
   
          <a href="#">Forgot Password</a>
        <!-- <i class="material-icons right">send</i>-->
         
          </div>
      </div>


		 </form>
      </div>
		 
           </br>	   
	
       </div>
  <!-- Modal Structure -->
  <div class="row">
  <div id="modal1" class=" col s6 offset-s3 modal">
    <div class="modal-content">
  	<div class="row">
	<form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input value="" id="name" type="text" class="validate">
          <label  class="active" for="name">Full Name</label>
        </div>
		</div>
		
	   <div class="row">
		<div class="input-field col s6">
          <input value="" id="department" type="text" class="validate">
          <label class="active" for="department">Department</label>
        </div>
      </div>
	  
  <div class="row">
		<div class="input-field col s6">
          <input value="" id="faculty" type="text" class="validate">
          <label  class="active" for="faculty">Faculty</label>
        </div>
      </div>
	  
	   <div class="row">
		<div class="input-field col s6">
          <input  value="email@domain.com" id="email" type="email" class="validate">
          <label class="active" for="email">Email</label>
        </div>
      </div>
	  
	   <div class="row">
		<div class="input-field col s6">
          <input  value="" id="password" type="password" class="validate">
          <label  class="active" for="password">Password</label>
        </div>
      </div>
		 </div>
<div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect indigo darken-1 ">
       	  <button class="btn indigo darken-1" type="submit" > create</button></a>
	  <a href="#" class="modal-close"><button class="btn indigo darken-1">cancel</button></a>  
   </div>
   </form>
	</div>
  </div>
  </div>
  </div>

     <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
      <script type="text/javascript" src="js/materialize.min.js"></script>	
      <script type="text/javascript">
		$(document).ready(function (){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
	</body>
	</html>