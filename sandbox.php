<?php

//ternary operators 
$score = 50;
$high = "The score is above 50, high score";
$low = "The score is below 50 low score";
//echo ($score > 48) ?  $high :  $low;

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


 //sessions  &&  cookies..two seperate things both used in form example
 // refer to header file to see name set on header & to see null coalescing
 if(isset($_POST['submit'])){
     //cookie for gender..name it, set the value, set expire time..in this example it expires in one day...cookies & local storage both are stored on users machine, local storage is used for frontend/read by js, cookies are used in backend/server.
     // refer to header file to see cookie being used.
     setcookie('gender',$_POST['gender'], time() + 86400);


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

 <!-- session example -->
 <form action="sandbox.php" method="POST">
     <input type="text" name="name" />
     <input type="submit" name="submit" value="submit" />

     <!-- cookie example -->
 <select name="gender">
     <option value="male">Male</option>
     <option value="female">Female</option>
 </select>
 </form>

 


</body>
</html>