<?php 

include('config/db_connect.php');


// check GET request param id
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // write query for one pizza order
  $sql = "SELECT * FROM pizzas WHERE id = $id";

  // make query & get result
  $res = mysqli_query($conn, $sql);

  // fetch the one row as an associative array
  $pizza = mysqli_fetch_assoc($res);

  // free result from memory
  mysqli_free_result($res);

  // close connection
  mysqli_close($conn);

 //print_r($pizza);
}

// if button/input with name delete is hit
if(isset($_POST['delete'])){
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    // write query to delete pizza order by id
  $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

  if(mysqli_query($conn, $sql)){
      // success
      header('Location: index.php');
  }else{
     echo 'query error: '. mysqli_error($conn);
  }
  
}



?>

<!DOCTYPE html>
<html>
<?php include './templates/Header.php'; ?>
<div class="container text-center my-5">
<?php if($pizza):  ?>
<h3><?php echo htmlspecialchars($pizza['title']); ?></h3>
<p>Created by:<?php echo " " . htmlspecialchars($pizza['email']);  ?></p>
<p>Created on:<?php echo " " . htmlspecialchars($pizza['created_at']);  ?></p>
<p>Ingredients:<?php echo " " . htmlspecialchars($pizza['ingredients']);  ?></p>

<!-- Delete form -->
<form action="details.php" method="POST">
    <input type="hidden" name="id_to_delete" value=" <?php echo $pizza['id'] ?>" />
    <input type="submit" name="delete" value="Delete" class="btn-dark" />
</form>


<?php else: ?>
<h4>No pizza found.</h4>
<?php endif; ?>

</div>



<?php include 'templates/Footer.php'; ?>

</html>