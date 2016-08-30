 <?php
   $dat=date("y-m-d");
   $due = date ("Y-m-d", strtotime ($dat ."+ 6days"));

      $book=isset($_POST['book']) ? $_POST['book']:'';
      $user=isset($_POST['user']) ? $_POST['user']:'';
      $department=isset($_POST['dept']) ? $_POST['dept']:'';
      $issue=isset($_POST['issue']) ? $_POST['issue']:'';
      $numb= isset($_POST['num']) ? $_POST['num']:'';
               

      $servername="localhost";
      $username="ruphine";
      $password="grace";
      $dbase="librarySystem";
//error_reporting(E_ALL ^ E_NOTICE);

//create connection
     $conn=new mysqli ($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".mysql_connect_error());
       }
            
               //insert into database
   $sql="INSERT INTO borrow (b_title,s_name,department,issue_date,due_date,copies) VALUES('$book','$user','$department','$issue','$due','$numb')";
    
    if($conn->query($sql)){
    echo '<script type="text/javascript"> alert("successful borrow");window.location.href="http://localhost/library-management-system/afterlogin.php";</script>';
  } 
    else{
      echo" try again";
      echo $conn->error;
    }
    $conn->close();
?>