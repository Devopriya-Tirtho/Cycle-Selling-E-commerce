<?php
//index.php
//   session_start();
//         echo  $_SESSION['username'];
 
$id=$cat_id='';

 $product_id=$product_name=$product_price=$product_img ='';
 $count=0;
 $connect = mysqli_connect("localhost", "root", "", "wheels");
 if(isset($_GET['id']))
 {
      $query = "SELECT * FROM products where product_id=".$_GET['id'];
$result = mysqli_query($connect, $query);
 }

 else if(isset($_GET['cat_id']))
 {
      $query = "SELECT * FROM products where cat_id=".$_GET['cat_id'];
     $result = mysqli_query($connect, $query);
 }
 


while($row2[]= mysqli_fetch_array($result))
{
     $count=$count+1;
}

if(isset($_POST["order"]))
{

    $quantity=$_POST["quantity"];
//    if(isset($_SESSION['username']))
   
    
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
    <link rel="stylesheet" href="css/productstyle.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Bootstrap PSD to HTML</title>
</head>

<body>
    <?php 
      
      for($j=0;$j<$count;$j++)
     {
          
         echo '<div class="product">
        <div class="container product_background">
        
            <div class="row">
           
                <div class="col-md-6">
                    <div class="product_description">
                        
                            <div class="product_name"><h1>'.$row2[$j]["product_name"].'</h1></div>
                            <div class="product_mainfeature">
                            
                                <h2>FEATURE :</h2>
                                <p>*'.$row2[$j]["product_f1"].'</p>
                                <p>*'.$row2[$j]["product_f2"].'</p>
                            </div>
                            <div class="product_Text">
                            <h2>DESCRIPTION :</h2>

                            <h6>*'.$row2[$j]["product_description"].'</h6></div>
                            <div class="product_price">
                            <h2>PRICE :</h2>

                            <p>$ '.$row2[$j]["product_price"].'</p></div>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_image">
                    <img class="img-fluid"src="images/'.$row2[$j]["product_image"].'" alt="error">
                     <form action="single_feature_product.php" method="post">
                    <div class="order">
                    <p class="text-center " ><input type="text" class="order_quantity" name="quantity" placeholder="QUANTITY"></p>
                    <p class="text-center ">
                        <button class="btn btn-secondary order_button rounded-5" type="submit" name="order">
                            ORDER NOW
                        </button>
                    </p>
                    </div>
                    </div>

                </div>
                </form>
            </div>
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