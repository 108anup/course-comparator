<?php include 'start.php' ?>


<script type="text/javascript">
function checkLogin(){
		var user_username = $('#loginform').find('input[name="user_username"]').val();
		var user_password = $('#loginform').find('input[name="user_password"]').val();

		if(user_username == "" || user_password == ""){
			$("#error").html("Please Fill All the Required Fields!");
			return false;
		} else {
			/*$.ajax({
			method: "POST",
			url: "checkuser.php",
			data: {user_username : user_username,user_password : user_password},
		  }).done(function(data){
				if(data == "fine"){
						console.log(data);
						$("#isFormValid").html("yes");
					}
					else{
						console.log(data);
						$("#error").html(data);
						$("#isFormValid").html("no");
					}
			});

			if($("#isFormValid").text()=="yes")
				return true;
			else{
				return false;
			}*/
			return true;
		}

	/*$.post("checkuser.php",{user_username : user_username,user_password : user_password},function(data,status){
		if(data == "fine"){
			$("#error").html(data);
			fine = true;
			alert(fine);
		}
		else{
			console.log(data);
			$("#error").html(data);
			fine = false;
		}
	});*/
}
</script>


<div class="jumbotron text-center">
	<h1><a id="heading" href="index.php">Course Comparator</a></h1><br><br>
</div>

<div class="row">
	<h3 class="col-sm-6 col-sm-offset-3">Login</h3>
	<form action="checkuser.php" method="post" onsubmit="return checkLogin();" class="col-sm-6 col-sm-offset-3" id="loginform">

		<div class="form-group">
			<label for="user_username">Username:</label>
			<input type="text" class="form-control" name="user_username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" name="user_password">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
		<br><br><br>
	</form>
</div>
<p class="col-sm-6 col-sm-offset-3" id = "error" style = "color:red"></p>
<p class="col-sm-6 col-sm-offset-3" style = "color:red">
	<?php
		session_start();
		if(isset($_SESSION['error']))
			echo $_SESSION['error'];
	?>
</p>

<?php include 'end.php' ?>
