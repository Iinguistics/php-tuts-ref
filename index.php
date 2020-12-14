<?php

 //connect to db
 include 'config/db_connect.php'; 
  
  // write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query & get result
  $res = mysqli_query($conn, $sql);

  // fetch the res rows as an associative array
  $pizzas = mysqli_fetch_all($res, MYSQLI_ASSOC);

  // free result from memory
  mysqli_free_result($res);

  // close connection
  mysqli_close($conn);

 //print_r($pizzas);

 // you can replace ur foreach loop {} opening & closing brackets with : colon for open & endforeach instead of } closing bracket.

 //echo count($pizzas);
?>


<!DOCTYPE html>
<html>
<?php include 'templates/Header.php'; ?>

<div class="container text-center main">
<h4>Pizza's</h4>
<div class="row">
<?php 
 foreach($pizzas as $pizza): ?>
 <div class="col s6 md3">
  <h4><?php  echo htmlspecialchars($pizza['title']); ?></h4> 
  <ul><?php  foreach(explode(',', $pizza['ingredients']) as $ing) : ?> 
  <li><?php echo htmlspecialchars($ing) ?></li>  
  <?php endforeach ?>
  </ul>  
  <a href="details.php?id=<?php echo $pizza['id'] ?>">More info</a>
 </div>
  
 <?php endforeach ?>

  </div>
</div>


<?php include 'templates/Footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>