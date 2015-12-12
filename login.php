<?php include 'start.php';
 	  session_start();
      $title = "Login - Course Comparator";
      if(isset($_SESSION['password'])){
          header("location: portal.php");
      }
?>

<div class="jumbotron text-center">
	<h1><a id="heading" href="index.php">Course Comparator</a></h1><br><br>
</div>

<div class="row">
	<h3 class="col-sm-6 col-sm-offset-3">Login</h3>
	<form action="checkuser.php" method="post" class="col-sm-6 col-sm-offset-3" id="loginform">

		<div class="form-group">
			<label for="user_username">Username:</label>
			<input type="text" class="form-control" name="user_username" value=<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" name="user_password">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
		<br><br><br>
	</form>
</div>
<p class="col-sm-6 col-sm-offset-3" id = "error" style = "color:red">
	<?php
		if(isset($_GET['errMsg']))
			echo $_GET['errMsg'];
	?>
</p>

<?php include 'end.php' ?>
