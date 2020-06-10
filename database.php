<?php

  //Create database connection
    $dbhost = "localhost";
    $dbuser = "baileybs_gravesA";
    $dbpass = "Guest";
    $dbname = "baileybs_graves";
    $connection = mysqli_connect($dbhost, 
    $dbuser, $dbpass, $dbname);

  //Test for connection
    if(mysqli_connect_errno()) {
      //die("Database Connetion Failed: " . mysqli_connect_errno() . " (" . mysqli_connect_errno() . ")"
      //);
    
    header("Location: database_error.php");
        exit;
    }
    
?>