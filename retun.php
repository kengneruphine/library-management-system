<?php
require('header.php')
?>
 </br> 
      <h4 class="center-align">Return Books</h4></br>
              <div class="row">
      <div class="col s3">.</div>
      
    <form  ng-app='myApp' class="col s6 z-depth-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  ng-controller="validateCtrl" 
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
                    <input value="" id="name" type="text" class="validate" name="stu" ng-model="stu" required>
                      <span style="color:red" ng-show="myForm.stu.$touched && myForm.stu.$invalid">
                      <span ng-show="myForm.stu.$error.required">please enter your name.</span>
                      </span>
                    <label  class="active" for="name">StudentName</label>
              </div>
        </div> 

      <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
                       <input value="" id="name" type="number" class="validate" name="num" ng-model="num" required>
                       <span style="color:red" ng-show="myForm.num.$touched && myForm.num.$invalid">
                       <span ng-show="myForm.num.$error.required">please enter number of books to return.</span>
                      </span>
                    <label  class="active" for="name"># of copies</label>
        </div>
        </div> 

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
                    <input value="" id="name" type="date" class="validate black-text" name="issue" ng-model="issue" placeholder ="yyyy-mm-dd" required>
                   <span style="color:red" ng-show="myForm.issue.$touched && myForm.issue.$invalid">
                   <span ng-show="myForm.issue.$error.required">enter  issue date.</span>
                  </span>
               <label  class="active" for="name">Issue date</label>
        </div>
        </div>

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6" type="date" id="du">
                   <input type="" onclick="displaydate()" name="due" value="see due date" required>
        </div>
        </div>

             <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="date" class="validate" name="retu" ng-model="retu" placeholder="yyyy-mm-dd" required>
                   <span style="color:red" ng-show="myForm.retu.$touched && myForm.retu.$invalid">
                   <span ng-show="myForm.retu.$error.required">enter today date.</span>
                  </span>
              <label  class="active" for="name">Return date</label>
        </div>
        </div>
                <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="number" class="validate" name="fine" ng-model="fine">
                  <span style="color:red" ng-show="myForm.fine.$touched && myForm.fine.$invalid">
                  <span ng-show="myForm.fine.$error.required">enter money.</span>
                  </span>
              <label  class="active" for="name">Fine,if any</label>
        </div>
        </div>


           <div class="row">
              <div class="col s4">.</div>
              <div class="input-field col s3">
               <button class=" btn indigo darken-1" type="submit" ng-disabled=" myForm.book.$invalid ||  
myForm.stu.$invalid || myForm.num.$invalid || myForm.fine.$invalid " name="action">Return</button>  
        </form>
        </div>







<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script type="text/javascript" src="js/angular.min.js"></script>
 
   <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.stu = '';
    $scope.num = 0;
    $scope.issue = '';
    $scope.retu= '';
    $scope.fine=0;
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



 <?php
        $dat=date("y-m-d");
        $due = date ("Y-m-d", strtotime ($dat ."+ 6days"));

    if($_SERVER["REQUEST_METHOD"] =="POST"){
               $book=isset($_POST['book']) ? $_POST['book']:'';
               $issue=isset($_POST['issue']) ? $_POST['issue']:'';
               $fine=isset($_POST['fine']) ? $_POST['fine']:'';
                 $user="";
                 $numb=0;
                 $retur="";
              $use=isset($_POST['stu']) ? $_POST['stu']:'';
              $num=isset($_POST['num']) ? $_POST['num']:'';
              $retu=isset($_POST['retu']) ? $_POST['retu']:'';
      //to get the difference between two dates

        $diff=(strtotime($due)-strtotime($retu)) /(60*60*24);
        $days=abs($diff);

        $fineto=$days * 100;   //100 to pay for a day
         $change=$fine - $fineto;


$servername="localhost";
$username="ruphine";
$password="grace";
$dbase="librarySystem"; 

//create connection
     $conn=new mysqli($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".$conn->connect_error);
       }
        
               //insert into database
     $sql="INSERT INTO `return` (b_title,s_name,copies,issue_date,due_date,return_date,fine,number_days,in_store,balance) VALUES('$book','$use','$num','$issue','$due','$retu','$fine','$days','$fineto','$change')";
    
    if($conn->query($sql) && $fineto == $fine){
    echo '<script type="text/javascript"> alert("Successful Return, no balance ");window.location.href="http://localhost/library-management-system/retun.php";</script>';
  }
    else if ($conn->query($sql) && $fine > $fineto){
            
      echo '<script type="text/javascript"> alert("Successful Return, you have a balance");window.location.href="http://localhost/library-management-system/retun.php";</script>';
    }
    else{
      echo "Error,";
    } 
    $conn->close();
 }
 ?>



 

 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
 <script type="text/javascript" src="js/materialize.min.js"></script>
 </body>
 </html>