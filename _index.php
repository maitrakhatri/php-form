<?php

$insert = false;

if(isset($_POST['submit'])) {
  
   $server = "localhost";
   $username = "root";
   $password = "";
   $con = mysqli_connect($server, $username, $password);
   
    if(!$con) {
         die("connection to this db failed due to" . mysqli_connect_error());
    }
    
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $age = $_POST['age'];
      $emailid = $_POST['emailid'];
      $sciname = $_POST['sciname'];
      $textarea = $_POST['textarea'];

      $sql = "INSERT INTO `phpform`.`forminfo` (`fname`, `lname`, `age`, `emailid`, `sciname`, `textarea`) VALUES ('$fname', '$lname', '$age', '$emailid', '$sciname', '$textarea');";
    
      if($con->query($sql) == true){
        echo "Successfully inserted";
      }

      else {
          echo "error";
      }
    
      $con->close();

} 

?>