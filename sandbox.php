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
 

// file system
  // readfile just captures the entire file, echo it out basically acts just as cat in linux
// $add = readfile('add.php');
// echo $add;

// file_exists just returns a boolean
//  $file = 'add.php';
//  if(file_exists($file)){
//      echo readfile($file);
//  }else{
//      echo 'file does not exist';
//  }

// copy file  takes in file you want to copy, then what you want to name it.
//copy($file, 'add-2.php');

// absolute path  show exact path of file
 //echo realpath($file)

 // file size
  // echo filesize($file);

  //rename file  takes in file you want to rename, then what you want to rename it.
  // rename($file, 'added.php');

  // make directory  just like in linux
  //mkdir('whatever');
  
  // opening a file for reading
	// $handle = fopen($file, 'r');

	// read the file
	// echo fread($handle, filesize($file));
	// echo fread($handle, 112);

	// read a single line
	// echo fgets($handle);
	// echo fgets($handle);

	// read a single character
	// echo fgetc($handle);
	// echo fgetc($handle);

	// $handle = fopen($file, 'r+');
	// $handle = fopen($file, 'a+');

	// writing to a file
	// fwrite($handle, "\nType in whatever you want.");

	// fclose($file);

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