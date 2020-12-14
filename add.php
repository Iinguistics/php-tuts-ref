<?php

	include('config/db_connect.php');

	$email = $title = $ingredients = '';
	$errors = array('email' => '', 'title' => '', 'ingredients' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

			// create sql
			$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

			
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
<?php include './templates/Header.php'; ?>

<div class="text-center container mt-5">
<h4>Add a Pizza</h4>
<form action="add.php" method="POST">
<label>E-mail:</label>
<?php echo $errors['email'] ?>
 <input class="mt-2" type="text" name="email" value= "<?php echo htmlspecialchars($email) ?>"> <br /> 
 <label>Pizza Title</label>
 <?php echo $errors['title'] ?>
 <input class="mt-2" type="text" name="title" value= "<?php echo htmlspecialchars($title) ?>"><br>
 <label>Ingredients:</label>
<?php echo $errors['ingredients'] ?>
 <input class="mt-2" type="text" name="ingredients" value= "<?php echo htmlspecialchars($ingredients) ?>"> <br /> 
<input class="btn-dark mt-2" type="submit" name="submit" value="Submit">
</form>
</div>

<?php include 'templates/Footer.php'; ?>

</html>