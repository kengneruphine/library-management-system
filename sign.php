<!--$global-->
<!DOCTYPE html>
<html>
<head>
  <title>sign up page</title>
   <meta charset="utf-8"/> 

<link href="css/fonts/google-material/material-icons.css" rel="stylesheet">
 <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body>
       <div class="navbar-fixed">
 	    <nav>
 	    <nav>
           <div class="nav-wrapper indigo darken-1"> 
		    <a href="#" class="brand-logo left">Logo</a>
		        <ul id="nav-mobile" class="right indigo darken-1">
	               <li><a href="home.php"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="history.php"><i class="material-icons left">history</i>History</a></li>
                    <li><a href="about.php">About us</a></li>
                     <li> <a href="contact.php"><i class="material-icons left">contacts</i>Contact us</a></li>
                     <li><a href="sign.php">login</a></li>
				</ul>
            </div>
		</nav>	  
	</div>

    <h5 class="center-align">Fill the form</h5>
 
	<div class="row">
	  <div class="col s3">.</div>
	  
	<form class="col s6 z-depth-2" action="" method="">
      <div class="row">
        <div class="input-field col s6">
          <input value="" id="name" type="text" class="validate">
          <label  class="active" for="name">Full Name</label>
        </div>
		</div>
		
	  
	   <div class="row">
		<div class="input-field col s6">
          <input  value="" id="password" type="password" class="validate">
          <label  class="active" for="password">Password</label>
        </div>
      </div>
	  
	    <div class="row">
		 <div class="col s1"></div>
	  
	    <div class="input-field col s3">
		<button class=" btn indigo darken-1" type="submit" name="action">login
        <!-- <i class="material-icons right">send</i>-->
         </button>
          </div>&nbsp;&nbsp;&nbsp;
         
		     <div class="input-field col s3">
   
          <button class=" btn indigo darken-1" type="submit" name="action">Cancel
        <!-- <i class="material-icons right">send</i>-->
         </button>
          </div>
		  </div>
		 </form>
         </div>
		 
           </br>
           </br>		   
		
		<div class="row">
		<div class="col s3">.</div>
		
		 <div class=input-field col s6>
		<button class=" btn indigo darken-1" type="submit" name="action">Forget password
         <i class="material-icons right">send</i>
         </button>
          </div>
		  </div>
		  </br>
		  
        <!-- Modal Trigger -->
		<div class="row">
		<div class="col s3">.</div>
		
		
      <a class="waves-effect indigo darken-1 btn modal-trigger" href="#modal1">Register</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
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
	  
	 <!-- <div class="row">
	    <div class="input-field col s3">
		<button class="indigo accent-1" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
   </div>
		  
		 </div>
         </form>
		 </div>
		 -->
		 </div>




<div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect indigo darken-1 ">
       	  <button class="btn indigo darken-1" type="submit" > create</button></a>
	  <a href="#" class="modal-close"><button class="btn indigo darken-1">cancel</button></a>  

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