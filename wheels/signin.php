<?php
//	session_start();
	 $connect = mysqli_connect("localhost", "root", "", "wheels");

?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div class="main-wrapper">
		
			<h2 class="text-center">Login Form</h2>
			
		
	
		<form class="myform" action="signin.php" method="post">
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
			<input name="login" type="submit" id="login_btn" class="btn-secondary" value="SIGNIN"/><br>
			<a href="register.php"><input type="button" id="register_btn" class="btn-secondary" value="Register"/></a>
		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$encrypted_password = md5($password);
			
			$query="select * from customer WHERE username='$username' AND password='$encrypted_password'";
			
			$query_run = mysqli_query($connect,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['username']= $username;
//                echo 	$_SESSION['username'];
				header('location:index.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
		
	</div>
</body>
</html>