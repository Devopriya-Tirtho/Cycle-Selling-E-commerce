<?php
//index.php
 $product_id=$product_name=$product_price=$product_img ='';
 $count=0;
 $connect = mysqli_connect("localhost", "root", "", "wheels");

 $query = "SELECT * FROM products ORDER BY product_price DESC limit 6";
 $result = mysqli_query($connect, $query);


while($row1[]= mysqli_fetch_array($result))
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
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Bootstrap PSD to HTML</title>
</head>

<body>
    <?php 
    
      for($j=0;$j<$count;$j++)
     {
         echo '<div class="single_feature_product   col-lg-4 col-md-6 col-sm-12">
                    <div class="single_feature_product_img">
                        <a href="single_feature_product.php?id='.$row1[$j]["product_id"].'"><p class="text-center"><img class="rounded img-fluid" src="images/'.$row1[$j]["product_image"].'" alt="error"></p></a>
                    </div>
                    <div class="single_feature_product_name"><p class="text-center">'.$row1[$j]["product_name"].'</p ></div>
                    <div class="single_feature_product_price"><p class="text-center">$ '.$row1[$j]["product_price"].'</p></div>
                    
                    <div class="single_feature_product_link">
                        <a href="single_feature_product.php?id='.$row1[$j]["product_id"].'"><p class="text-center">LEARN MORE</p></a> 
                    </div>
                    
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