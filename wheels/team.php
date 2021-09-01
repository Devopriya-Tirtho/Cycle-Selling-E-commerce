<?php
//index.php
 $img=$name=$designation = '';
$count=0;
 $connect = mysqli_connect("localhost", "root", "", "wheels");

 $query = "SELECT image,member_name,designation FROM team ORDER BY rank ASC limit 3";
 $result = mysqli_query($connect, $query);


while($row[]= mysqli_fetch_array($result))
{
     $count=$count+1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Bootstrap PSD to HTML</title>
</head>

<body>
  <?php 
    
     for($j=0;$j<$count;$j++)
     {
         echo '<div class="team_member col-md-4 col-sm-12">
                    <div class="team_member_img">
                        <a href="#"><p class="text-center"><img class="rounded-circle img-fluid" src="images/'.$row[$j]["image"].'" alt="error"></p></a>
                    </div>
                    <div class="team_member_name"><p class="text-center">'.$row[$j]["member_name"].'</p ></div>
                    <div class="team_member_designation"><p class="text-center">'.$row[$j]["designation"].'</p></div>
                </div>';
         
     }
    
   
   ?>
   
       <!-- jQuery first then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--    customized js-->
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>


