<?php
 $connect = mysqli_connect("localhost", "root", "", "wheels");
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="css/media.css">

</head>
<body style="background-color:#bdc3c7">
	
	<div class="main-wrapper">
		
			<h2 class="text-center">Registration Form</h2>
			
		
	
		<form class="myform" action="register.php"method="post">
			<label><b>Full name:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Fullname" required/><br>
			<label><b>Address:</b></label><br>
			<input name="address" type="text" class="inputvalues" placeholder="Type your Address" required/><br>
			<label><b>Phone No:</b></label><br>
			<input name="phone" type="text" class="inputvalues" placeholder="Type your phone Number" required/><br>
			
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues " placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" class="btn-secondary" value="Sign Up"/><br>
			<a href="signin.php"><p class="text-center"><input type="button" id="back_btn"  class="btn-secondary"value="Back"/></p></a>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				
				$fullname = $_POST['fullname'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$encrypted_password = md5($password);
					
					$query= "select * from customer WHERE username='$username'";
					$query_run = mysqli_query($connect,$query);
					
                    
                    
                    
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{
						
                        $query= "insert into customer(fullname,address,phone,username,password) values('$fullname','$address','$phone','$username','$encrypted_password')";
						$query_run = mysqli_query($connect,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
                             header('Location: signin.php');
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
                            
						}
					}
					
					
				}
				else{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
				}
				
				
				
				
			}
		?>
		
		  <!-- jQuery first then Bootstrap JS -->




    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--    customized js-->
    <script type="text/javascript" src="js/main.js"></script>
	</div>
</body>
</html>