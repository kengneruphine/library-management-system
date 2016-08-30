<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST['email'];
        $pass=isset($_POST['password']) ? $_POST['password']:'';

      

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
        $password1='';
     $sql="SELECT password FROM student WHERE email='$email'";
        $result=$conn->query($sql);

          if($result->num_rows>0){
              //fetch password from databse
            while($row=$result->fetch_assoc()){
                  $password1= $row['password'];
            }
                  

                 if(password_verify($pass,$password1)){
                        
                     header("location:afterlogin.php");
                   } 
               else{
                      echo "wrong email or password";
                 }  
          }
     }     
       
   $conn->close();
?>