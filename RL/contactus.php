<?php

    $server = "localhost";
    $username ="root";

    $conn = mysqli_connect($server , $username);

    if(!$conn){
        die("Connection To This Databse Failed Due to". mysqli_connect_error());
    }
    echo "Connection Successful";


    
     $name = "";
     $email = "";
     $subject = "";
     $message = "";

     $name = $_POST['$name'];
     $email = $_POST['$email'];
     $subject = $_POST['$subject'];
     $message = $_POST['$message'];
 
    
    $sql = "INSERT INTO `contact`.`contact`(`Name`, `Email`, `Subject`, `Message`, `Date-Time`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
    echo $sql;
  
  
     if($conn->query($sql) == true){
       echo "Successfully inserted";
     }
     else{
       echo "ERROR: $sql <br> $conn->error";
     }
      $inserted = $sql;
     $conn->close(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>RAPID LYRICS</title>
</head>
<body>
              <!--Nav Bar-->
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark navBar">

                <a class="navbar-brand" href="index.html"><img src="mainLogo/RL MAIN LOGO.png" class="img-Fluid float-left" id="mainLogo" alt="RAPID LYRICS LOGO"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="navbar-brand" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="Hollywood Collection/hollywood.html">HOLLYWOOD</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Bollywood Collection/bollywood.html">BOLLYWOOD</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Korean Collection/korean.html">KOREAN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Spanish Collection/spanish.html">SPANISH</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Disney Collection/disney.html">DISNEY</a>
                    </li>
                   
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-Primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
              <!--Container-->
            <div class="container-fluid containerBody">
                <!-- Container -->
                <div class="container containerBody">
                <h4 class="pt-3 txt-cent txt-family"> Fill Out This Form Will Send Your Message Directly To Rapid Lyrics.</h4>
                    <hr class="hr">
                    <form class="txt-cent font-weight-bolder" action="contactus.php" method="post">
                        <div class="form-group">
                          <label for="formGroupExampleInput">YOUR NAME</label>
                          <input type="text" name ="name" id ="name" class="form-control txt-cent" id="formGroupExampleInput" placeholder="Write Your Name Here..">
                        </div>
                        
                    <div class="form-group">
                      <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                      <input type="text" name ="email" id ="email" class="form-control txt-cent" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Your Email-Address">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">SUBJECT</label>
                        <input type="text" name ="subject" id ="subject" class="form-control txt-cent " id="formGroupExampleInput" placeholder="Write Which Topic You Want To Discuss..">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">MESSAGE</label>
                        <textarea class="form-control txt-cent" id="exampleFormControlTextarea1" name ="message"  rows="5"></textarea>
                      </div>
                     <button type="submit"  class="btn btn-Primary my-2 my-sm-0">Submit</button>
                     <br>
                     <br>
                  </form>
          </div>
      </div>
  
  
    <!-- Footer -->
<div class="container-fluid">
  <div class="row footer">
    <div class="col-12">
      <div class="row">
      <div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-3 py-1">
      </div>
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2  col-3 py-1 footer-txt">
      <a href="contactus.php" class="link">Contact Us</a>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3  col-4 py-1 footer-Txt">
      <a href="submitlyrics.html" class="link">Submit Lyrics</a>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
<!-- /.footer -->



    <script src="bootstrap/jquery.js"></script> 
    <script src="bootstrap/bootstrap.js"></script> 
</body>
</html>































