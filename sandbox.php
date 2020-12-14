<?php

//ternary operators 
$score = 50;
$high = "The score is above 50, high score";
$low = "The score is below 50 low score";


//Superglobals
  //get input fields
  // $_GET['name],  $_POST['name']
  
  //current server globals
  //echo $_SERVER['SERVER_NAME'] . '<br />';

  //echo $_SERVER['REQUEST_METHOD'] . '<br />';

    // current path with host included example: C:/xampp/htdocs/tuts/sandbox.php
  //echo $_SERVER['SCRIPT_FILENAME'] . '<br />';

    // current path withOUT host included example: /tuts/sandbox.php
  //echo $_SERVER['PHP_SELF'] . '<br />';


 //sessions
 // refer to header file to see name set on header
 if(isset($_POST['submit'])){
     session_start();
     $_SESSION['name'] = $_POST['name'];
     header('Location: index.php');
 }
 // to unset a specific session
 //unset($_SESSION['name']);

 // to unset all sessions
 //session_unset();






?>



<!DOCTYPE html>
<html>
<head>
<title>Sandbox</title>
</head>
<body>  
 <div>
     <h3><?php echo ($score > 48) ?  $high :  $low; ?></h3>
 </div>

 <form action="sandbox.php" method="POST">
     <input type="text" name="name" />
     <input type="submit" name="submit" value="submit" />
 </form>


</body>
</html>