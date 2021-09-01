<?php

$error1= $error2=$error3=$error4=$error5=  '';
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$message = ''; $shown='';$no_rows1='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
    
    
    
 if(empty($_POST["first_name"]))
 {
  $error1 .= '<p class="text-danger">*Please Enter your First Name</p>';
 }
 else
 {
  $first_name = clean_text($_POST["first_name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$first_name))
  {
   $error1 .= '<p class="text-danger">Only letters and white space allowed</p>';
  }
 }
   
    if(empty($_POST["last_name"]))
 {
  $error1 .= '<p class="text-danger">*Please Enter your Last Name</p>';
 }
 else
 {
  $last_name = clean_text($_POST["last_name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$last_name))
  {
   $error1 .= '<p class="text-danger">Only letters and white space allowed</p>';
  }
 }
    
 if(empty($_POST["email"]))
 {
  $error2 .= '<p class="text-danger">*Please Enter your Email</p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error2 .= '<p class="text-danger">*Invalid email format</p>';
  }
 }
 if(empty($_POST["phone"]))
 {
  $error3 .= '<p class="text-danger">*Phone Number is required</p>';
 }
 else
 {
  $phone = clean_text($_POST["phone"]);
 }
 if(empty($_POST["message"]))
 {
  $error4 .= '<p class="text-danger">*Message is required</p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error1 == '' && $error2 == '' && $error3 == '' && $error4 == '')
 {
     $connect = mysqli_connect("localhost", "root", "", "wheels");
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];
     
				
     $query= "insert into contact(first_name,last_name,email,phone,message) values('$first_name','$last_name','$email','$phone','$message')";
     $result = mysqli_query($connect, $query);
     
     if($result)
     {
           $error5 = '</br><p class="text-center text-success ">Thank you for contacting us</p>';
     }
     else
     {
           $error5 = '</br><p class="text-center text-success ">Error in Insertion</p>';
     }
     
 }
}

    
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/contactsyle.css">
    <link rel="stylesheet" href="css/contactmedia.css">

    <title>Contact</title>
</head>

<body>

    <section class="contact">
        <div class="message">
            <div class="container-fluid">
                <div class="wrapper">
                    <div class="row  ">
                      
                        <div class="col-sm-12 send_massage m-0 p-0">


                            <div class="input_ ">
                                <div class="container-fluid">
                                    <div class="heading">
                                        <p>Send Us A Message</p>
                                    </div>


                                    <form action="admin.php" method="post">
                                        <?php echo $error5; ?>
                                        <label for="User_name">TELL US YOUR NAME*</label>
                                        <div class="fname ">
                                            <input type="text" name="first_name" placeholder="First name" value="<?php echo $first_name; ?>">

                                        </div>
                                        <div class="lname">
                                            <input type="text" name="last_name" placeholder="Last name" value="<?php echo $last_name; ?>">

                                        </div>
                                        <?php echo $error1; ?>

                                        <label for="User_email">ENTER YOUR EMAIL*</label><br>
                                        <input type="text" name="email" placeholder="Eg.example@email.com" class="uemail" value="<?php echo $email; ?>">

                                        <br>
                                        <?php echo $error2; ?>
                                        <label for="User_phn">ENTER PHONE NUMBER</label><br>
                                        <input type="text" name="phone" placeholder="Eg.+0050555555" class="uphn" value="<?php echo $phone; ?>">

                                        <br>
                                        <?php echo $error3; ?>
                                        <label for="User_msg">MESSAGE*</label><br>
                                        <textarea name="message" id="" cols="48" rows="10" placeholder="Write us a message" class="umsg" value="<?php echo $message; ?>"></textarea>

                                        <br>
                                        <?php echo $error4; ?>
                                        <div class="button_">
                                            <input type="submit" class="btn btn-success " name="submit">
                                        </div>




                                    </form>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </section>
    


    <!-- jQuery first then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Customized JavaScript -->
    <script type="text/javascript" src="js/main.js"></script>


</body>

</html>
