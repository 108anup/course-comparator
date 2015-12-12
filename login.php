<?php include 'start.php' ?>

<div class="jumbotron text-center">
	<h1><a id="heading" href="index.php">Course Comparator</a></h1><br><br>
</div>

<h3 class="col-sm-6 col-sm-offset-3">Login</h3>
<form action="portal.php" method="post" role="form" class="col-sm-6 col-sm-offset-3">

	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" id="username">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="password">
	</div>

	<button type="submit" onsubmit="" class="btn btn-default">Submit</button>
</form>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<p id = "error" style.color="red"></p>

<script type="text/javascript">

	function checkLogin(){
		var user_name = $("#username").value();
		var password = $("#pass").value();

		$.post("checkuser.php",{username : user_name,password : pass},function(data,status){
			if(data == "fine")
				return true;
			else{
				$("#error").html(data);
			}
		});

	}


</script>

<?php include 'end.php' ?>
