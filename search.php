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