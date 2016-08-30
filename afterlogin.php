<?php
require('header.php')
?>
 </br> 
<div class="row">
    <div class="col s4"><a href="retun.php" class="btn indigo darken-1" type="submit"> Return Books</a></div>

    
      <form class="col s4 z-depth-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <div class="input-field">
          <input id="search" type="search" name="search" required>
          <label for="search"><i class="material-icons">search</i> Search Books</label>
          <i class="material-icons">close</i>
        </div>
      </form>
      </div>
      <?php

      $search = isset($_GET['search']) ? $_GET['search']:'';

      $servername="localhost";
      $username="ruphine";
      $password="grace";
      $dbase="librarySystem";
//error_reporting(E_ALL ^ E_NOTICE);

//create connection
     $conn=new mysqli ($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".$conn->connect_error());
       }
          if (strlen($search)>0) {
              $sql = " SELECT title,isbn,author,department FROM book WHERE title LIKE '%".$search."%' ";
              $result1 = $conn->query($sql);
              
    //display search result
           if ($result1->num_rows > 0) {
      // output data of each row
           foreach($result1 as $value){
                ?>

                <div class="row"><div class="col s4">.</div>
                    <div class="col s4">
                       <table class="bordered">
                                 <tbody>
                                    <tr>
                                      <td><?php echo $value['title'];?></td> 
                                      <td><?php echo $value['isbn'];?></td>
                                      <td><?php echo $value['author'];?></td>
                                      <td><?php echo $value['department'];?></td>
                                     </tr>
                                   </tbody> 
                                   </table>  
                    </div>
                    </div>
                    <?php
        
      }
    }
    //if data has not been entered or if white space has been entered
  }
  else {
          echo "";
        }
        $conn->close();


    ?>

</br>
</br>
<h5 class="center-align">Borrow Books</h5>
 
  <div class="row">
    <div class="col s3">.</div>
    
  <form  ng-app='myApp' class="col s6 z-depth-2" action="afterlo.php" method="POST" ng-controller="validateCtrl" 
 name="myForm" novalidate>
      <div class="row">
      <div class="col s2">.</div>
        <div class="input-field col s6">
          <input value="" id="name" type="text" class="validate" name="book" ng-model="book" required>
                <span style="color:red" ng-show="myForm.book.$touched && myForm.book.$invalid">
                 <span ng-show="myForm.book.$error.required">please enter book title.</span>
                  </span>
          <label  class="active" for="name">BookTitle</label>
        </div>
    </div>
    
    
     <div class="row">
     <div class="col s2">.</div>
    <div class="input-field col s6">
          <input  value="" id="depart" type="text" class="validate" name="user" ng-model="user" required>
                 <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                 <span ng-show="myForm.user.$error.required">name is required.</span>
                  </span>
          <label  class="active" for="depart">StudentName</label>
        </div>
      </div>
    
         <div class="row">
         <div class="col s2">.</div>
    <div class="input-field col s6">
          <input  value="" id="faculty" type="text" class="validate" name="dept" ng-model="dept" required>
                <span style="color:red" ng-show="myForm.dept.$touched && myForm.dept.$invalid">
                 <span ng-show="myForm.dept.$error.required">please enter your department.</span>
                  </span>
          <label  class="active" for="faculty">department</label>
        </div>
      </div>  
      
          <div class="row">
              <div class="col s2">.</div>
               <div class="input-field col s6">
                   <input  value="" id="faculty" type="number" class="validate" name="num" ng-model="num" required >
                     <span style="color:red" ng-show="myForm.num.$touched && myForm.num.$invalid">
                     <span ng-show="myForm.num.$error.required">enter number of books to borrow.</span>
                    </span>
          <label  class="active" for="faculty"># of books to borrow</label>
        </div>
      </div>


           <div class="row">
         <div class="col s2">.</div>
    <div class="input-field col s6">
          <input  value="" id="faculty" type="text" class="validate" name="issue" ng-model="issue" placeholder="yyyy/mm/dd" required >
                  <span style="color:red" ng-show="myForm.issue.$touched && myForm.issue.$invalid">
                   <span ng-show="myForm.issue.$error.required">enter today date.</span>
                  </span>
          <label  class="active" for="faculty">Issue_date</label>
        </div>
      </div>         
  

        

 <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6" type="date" id="du">
           <input type="" onclick="displaydate()" name="due" value="see due date" required>
        </div>
      </div>

      

        <div class="row">
     <div class="col s1">.</div>
         <div class="col s4">.</div>
         <div class="input-field col s3">
   
          <button class=" btn indigo darken-1" type="submit"  ng-disabled="myForm.book.$invalid ||  
myForm.user.$invalid || myForm.num.$invalid || myForm.issue.$invalid ||
 myForm.due.$invalid" name="action" >Borrow
        <!-- <i class="material-icons right">send</i>-->
         </button>
          </div>
      
      </form>
      </br></br>  
      </div>


    
 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script type="text/javascript" src="js/angular.min.js"></script>
 
   <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.user = '';
    $scope.issue = '';
    $scope.due='';
    $scope.num= 0;
});
</script>
<script type="text/javascript">
function displaydate(){
         var someDate = new Date();
         var numberOfDaysToAdd = 6;
         someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 

         var dd = someDate.getDate();
         var mm = someDate.getMonth() + 1;
          var y = someDate.getFullYear();

var somedate = y + '-'+ mm + '-'+ dd;
 document.getElementById("du").innerHTML=somedate;
  }      
</script>




   
</body>
   </html>
   
   
   


