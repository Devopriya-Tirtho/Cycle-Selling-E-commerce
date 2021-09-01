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

    <title>WHEELS</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--  header start-->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light mb-0 pl-0">
                <a class="navbar-brand header_logo" href="index.php">
                    <a href="index.php"><img class="img-fluid" src="images/logo1.png" alt="error"></a>

                </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                <div class="collapse navbar-collapse  header_nav " id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto float-right">
                        <li class="nav-item ">
                            <a class=" nav-link float-right" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item float-right">
                            <a class="nav-link float-right" href="#aboutus">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown float-right">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <div class="dropdown-link dropdown-menu float-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="single_feature_product.php?cat_id=1">KIDS CYCLE</a>
                                <a class="dropdown-item" href="single_feature_product.php?cat_id=2">MEN CYCLE</a>
                                <a class="dropdown-item" href="single_feature_product.php?cat_id=3">WOMEN CYCLE</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link float-right" href="#ourteam">OUR TEAM</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link float-right" href="#">BLOG</a>
                        </li>
-->
                        <li class="nav-item">
                            <a class="nav-link float-right" href="admin.php">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link float-right" href="signin.php">SIGN IN</a>
                        </li>


                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <!--   header end-->
    <!--banner start-->
    <section class="banner">
        <div class="banner_bg">
            <div class="container">
                <?php include 'Carousel.php';?>
            </div>
        </div>
    </section>
    <!--banner end-->

    <!--about us start-->

    <section class="about_us" id="aboutus">
        <div class="container">
            <p class="about_us_heading text-center">ABOUT US </p>
            <p class="about_us_heading1 text-center">Let's talk about what makes our company great </p>
            <p class="about_us_icon text-center"><img class="img-fluid " src="images/bike.png" alt="error"> </p>
            <p class="about_us_body text-center"><?php include 'about_us.php';?></p>


        </div>
    </section>

    <!--about us end-->


    <!--    statistics start-->
    <section class="statistics">
        <div class=" container">
            <div class="statistics_text ">
                <p class="about_us_heading text-center">Some Statistics </p>
                <p class="about_us_heading1 text-center">Showing what our comapany already acomplished is always a good selling point</p>
            </div>
        </div>
    </section>
    <!--    statistics end-->

    <!--    feature product start-->


    <section class="feature_product">
        <div class="container">
              <h2 class="text-center feature_product_title">FEATURED PRODUCTS</h2>
            <div class="row pt-5 ">
            
                <?php include 'feature_product.php';?>

            </div>
        </div>


    </section>

    <!--    feature product end-->



    <!--    team start-->

    <section class="team" id="ourteam">
        <div class="container">
            <div class="team_text pt-5">
                <p class="about_us_heading text-center ">MEET THE TEAM</p>
                <p class="about_us_heading1 text-center ">Showing what our comapany already acomplished is always a good selling point</p>
            </div>
            <div class="container ">
                <div class="row  pt-5">

                    <?php include 'team.php';?>

                </div>
            </div>
        </div>
    </section>
    <!--    team end-->

   <footer>
       <div class="container-fluid">
           <p class="text-center">WHEELS</p>
           <h2 class="text-center">&copy;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, fuga.</h2>
       </div>
   </footer>
   
    <!--product design-->

    <!--
    
    <div class="product">
        <div class="container product_background">
            <div class="row">
                <div class="col-md-6">
                    <div class="product_description">
                        <form action="single_feature_product.php" method="post">
                            <div class="product_name"><h1></h1></div>
                            <div class="product_mainfeature">
                                <h3></h3>
                                <h3></h3>
                            </div>
                            <div class="product_Text"></div>
                            <div class="product_price"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_image"></div>
                    
                    <p class="text-center order_button">
                        <button class="btn btn-secondary round-1" type="submit" name="order">
                            ORDER NOW
                        </button>
                    </p>

                </div>
                
            </div>
        </div>
    </div>
-->


    <!--product design-->

    <!-- jQuery first then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--    customized js-->
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
