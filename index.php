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
        //  echo "Successfully inserted";
         $insert = true;
        //  echo $insert;
       }
       
       else {
           echo "error";
       }
    
      $con->close();
      
} 

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

        * {
            font-family: 'Roboto Mono', monospace;
        }
    </style> 

    <title>php form</title>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-info mb-5">
        <span class="navbar-brand mb-0 h1">Maitra's Form</span>
    </nav>

    <div class="container">
       
        <?php

        if($insert==1) {
          echo "Submitted successfully <br>";
        }

        ?>

        <div class="card mb-5">

            <div class="card-header bg-dark text-light">
                Fill your details
            </div>

            <div class="card-body">
              
                <form action="index.php" method="post">

                    <div class="form-col">

                      <div class="col m-2">
                        <input name="fname" type="text" class="form-control" placeholder="First name" >
                      </div>
                      
                      <div class="col m-2">
                        <input name="lname" type="text" class="form-control" placeholder="Last name" >
                      </div>

                      <div class="col m-2">
                        <input name="age" type="number" class="form-control" placeholder="Age" >
                      </div>

                      <div class="col m-2">
                        <input name="emailid" type="email" class="form-control" id="inputEmail3" placeholder="Email ID" >
                      </div>

                      <div class="col m-2">
                        <input name="sciname" type="text" class="form-control" placeholder="School / College / Instituition Name" >
                      </div>

                      <div class="col m-2">
                        <textarea name="textarea" class="form-control" id="validationTextarea" placeholder="Any message" ></textarea>
                      </div>
                      
                      <div class="col m-2">
                        <input name="submit" class="btn btn-dark" type="submit" value="Submit">
                      </div>
                
                      <div class="col m-2">
                        <input class="btn btn-danger" type="reset" value="Reset">
                      </div>      

                    </div>

                </form>
    
            </div>
        </div>
    
    </div>
      
    <nav class="text-center navbar-dark bg-info">
        <span class="navbar-brand mx-auto h1">Created by: Maitra Khatri</span><br>
        <a class="navbar-brand" href="https://github.com/maitrakhatri">
            <img src="GitHub-Mark-Light-32px.png" width="30" height="30" alt="">
        </a>
    </nav>
    


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>


<!-- INSERT INTO `forminfo` (`srno`, `fname`, `lname`, `age`, `emailid`, `sciname`, `textarea`, `time`) VALUES ('1', 'sample fname', 'sample lname', '20', 'sample@gmail.com', 'saledu', 'you\'re amazing', current_timestamp());  -->