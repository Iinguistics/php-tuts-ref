<?php 
// connect to database
$conn = mysqli_connect('localhost', 'James', 'abc', 'zah_pizza');

//check connection
if(!$conn){
 echo 'Connection error' .  mysqli_connect_error();
}

?>