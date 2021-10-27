<?php

  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

     if ($con) {
         echo "Sucessfully connected to db";
    }

    else {
         die("connection to this db failed due to" . mysqli_connect_error());
    }



if(isset($_POST['submit'])) {
  
//   $server = "localhost";
//   $username = "root";
//   $password = "";

//   $con = mysqli_connect($server, $username, $password);

  if ($con) {
    echo "Sucessfully connected to db";
    }

    if(!$con) {
        die("connection to this db failed due to" . mysqli_connect_error());
    }
    
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $age = $_POST['age'];
      $emailid = $_POST['emailid'];
      $sciname = $_POST['sciname'];
      $textarea = $_POST['textarea'];
    
      $sql = "INSERT INTO 'phpform'.'forminfo' ('fname', 'lname', 'age', 'emailid', 'sciname', 'textarea', 'time') VALUES ('$fname', '$lname', '$age', '$emailid', '$sciname', '$textarea', current_timestamp());";
    
      if($con->query($sql) == true){
        echo "Successfully inserted";
      }
    
      $con->close();

} 

?>