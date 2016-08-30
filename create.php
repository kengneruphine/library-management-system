<?php


//if($_SERVER=['REQUEST_METHOD']=='POST'){
               $first=isset($_POST['user']) ? $_POST['user']:'';
               $last=isset($_POST['lname']) ? $_POST['lname']:'';
               $department=isset($_POST['dept']) ?$_POST['department']:'';
               $faculty=isset($_POST['fac']) ? $_POST['fac']:'';
               $email=isset($_POST['email']) ?$_POST['email']:'';
               $password=isset($_POST['password']) ?$_POST['password']:'';
               $pass=password_hash($password,PASSWORD_DEFAULT);
       var_dump($department);
              $servername="localhost";
              $username="ruphine";
              $password="grace";
              $dbase="librarySystem";
 //error_reporting(E_ALL ^ E_NOTICE);
//create connection
     $conn=new mysqli ($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".$conn->connect_error);
       }
          

           
 //insert into database
      $sql="INSERT INTO  student (`first_name`,`last_name`,`department`,`faculty`,`email`,`password`) VALUES ( '$first','$last','$department','$faculty','$email','$pass')";

    if($conn->query($sql)=== TRUE){ 
     
      header("location:afterlogin.php");
    }
     else{
     echo "Error;couldnot sign up";
    }



   $conn->close();
 //}
   ?>