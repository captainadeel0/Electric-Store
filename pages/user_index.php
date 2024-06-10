<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>E-commerce</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../fonts/css/all.css">
    <script src="../fonts/js/all.js"></script>


    <!--     inserted     -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    
    <link href="../assets/style.css" rel="stylesheet"/>
    <!--     inserted     -->
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="user_index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by Serve(8) Web Solutions, Inc." data-placement="bottom" target="">
                    E-Commerce Website
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    <span class="navbar-toggler-bar bar4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo ''.$row['username'].'';
                                ?>
                            </p>
                        </a>
                    </li>
					 <li class="nav-item">
                        <a href="admin_login_page.php" class="nav-link" onclick="scrollToDownload()">
                            <i class="now-ui-icons education_paper"></i>
                            <p>ADMIN PANEL</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Electronic Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_cart.php" onclick="scrollToDownload()">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Shopping Cart</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/1.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                        <img src="../assets/img/elogo.png" alt="Circle Image" class="rounded-circle">
                        <br><br>
                        <h3>Raspberry Pi, Arduino, Sensors, Modules, and Electronic components.</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <br>
                    <div class="col-md-12">

                    
                        

                        <div class="col-md-12 ml-auto mr-auto">


                        
                        <h3 class="title text-center">Our Products</h3>

                        <br>
                        
                        <div class="nav-align-center">

                          
      <form method="POST" action="user_index_search.php">
        <div class="mb-3  ">
          <label for="search" class="form-label"><b>Search Product:</b></label>
          <input type="text" name="search" class="form-control  " id="search" placeholder="Enter product name">
        </div>
      </form>
    
    <br><br>
                               
                        
                       
                       <style>
  /* CSS to center the list items */
  ul {
    list-style: none; /* Remove default list styles */
    padding: 0; /* Remove default padding */
    text-align: center; /* Center align the list items */
  }

  li {
    display: inline-block; /* Display list items in a row */
    margin: 0 10px; /* Add margin for spacing between items */
  }

  /* Style the links */
  .nav-link {
    text-decoration: none; /* Remove default underline */
    color: black; /* Set link color */
  }
</style>

<ul>
  <li class="nav-item">
    <a class="nav-link active" href="#laptops" role="tablist">
      <h5>Laptops</h5>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#desktop-pc" role="tablist">
      <h5>Desktop PC</h5>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#tablets" role="tablist">
      <h5>Tablets</h5>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#chrome-books" role="tablist">
      <h5>Chrome Books</h5>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#accessories" role="tablist">
      <h5>Accessories</h5>
    </a>
  </li>
</ul>

                        </div>
                    </div>
                       



                
                           
                    </div>


                    <style>
                        .thumbnail {
                               box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                               transition: 0.3s;
                               border-radius: 10px; }
                               
                               .thumbnail:hover {
                               box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
                               transform: translateY(-5px); 
                               border-radius: 10px;
                               }

                    </style>
                    <br><hr color="orange">
                    <br>

<!-- =========== laptop section  ============= -->

<h3 id="laptops"  class="title text-center">Laptops</h3>
    <div class="tab-pane shadow active" id="">
        <ul class="thumbnails">
        <?php
        $query = "SELECT * FROM products  WHERE category = 'Laptops' ORDER BY prod_name ASC";
        $result = mysqli_query($dbconn, $query);
        $count = 0; 
         echo '<div class="row mt-5">';
        while ($res = mysqli_fetch_array($result)) {
            $prod_id = $res['prod_id'];
        ?>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <?php if ($res['prod_pic1'] != "") : ?>
                        <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="240px">
                    <?php else : ?>
                        <img src="../uploads/default.png" width="300px" height="200px">
                    <?php endif; ?>
                    <div class="caption">
                        <h5><b><?php echo $res['prod_name']; ?></b></h5>
                        <h6 class="m-3">
                           <a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id']; ?>"><i class="now-ui-icons gestures_tap-01"></i>View</a>
                           <span style="margin-left: 110px;">Rs: <?php echo $res['prod_price']; ?></span> <!-- Add margin-left -->
                    </h6>
                    </div>
                    
                </div>
                    <hr color="orange">
            </div>
                         
                    <?php }?> 
                    
                    </ul>
        </div>

        <!--   end    -->

        <!--============= desktop pc section========== -->

        <h3 id="desktop-pc"  class="title text-center">Desktop PC</h3>
<div class="tab-pane shadow active" id="">
    <ul class="thumbnails">
        <?php
        $query = "SELECT * FROM products  WHERE category = 'Desktop PC' ORDER BY prod_name ASC";
        $result = mysqli_query($dbconn, $query);
        $count = 0; 
         echo '<div class="row mt-5">';
        while ($res = mysqli_fetch_array($result)) {
            $prod_id = $res['prod_id'];
        ?>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <?php if ($res['prod_pic1'] != "") : ?>
                        <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="240px">
                    <?php else : ?>
                        <img src="../uploads/default.png" width="300px" height="200px">
                    <?php endif; ?>
                    <div class="caption">
                        <h5><b><?php echo $res['prod_name']; ?></b></h5>
                        <h6 class="m-3">
                           <a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id']; ?>"><i class="now-ui-icons gestures_tap-01"></i>View</a>
                           <span style="margin-left: 110px;">Rs: <?php echo $res['prod_price']; ?></span> <!-- Add margin-left -->
                    </h6>
                    </div>
                    
                </div>
                    <hr color="orange">
            </div>
                         
                    <?php }?> 
                    
                    </ul>
        </div>
     
        <!-- ===== end===== -->

        <style>
        .banner {
            background-color: orange;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .banner h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .banner p {
            color: #666;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .banner a {
            background-color: green;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .banner a:hover {
            background-color: #e05246;
        }
    </style>

<div class="banner">
    <h1>Eid-ul-Adha Deals!</h1>
    <p>Find Your Perfect Electronics at Unbeatable Prices</p>
    <p>Explore Our Exclusive Offers:</p>
    <ul>
        <li>☀️ Sandals: Embrace the Sun in Comfort and Style!</li>
        <li>🌴 Flip Flops: Casual Cool for Poolside Lounging!</li>
        <li>🌊 Sneakers: Step Up Your Summer Adventures!</li>
        <li>🏖️ Espadrilles: Effortlessly Chic for Beach Days!</li>
    </ul>
    <p>Limited Time Only! Grab Your Essentials Now!</p>
    <a href="#">Shop Now</a>
</div>


        <!-- ======= tablets section ========== -->
        
        <h3 id="accessories"  class="title text-center">Accessories</h3>
<div class="tab-pane shadow active" id="">
    <ul class="thumbnails">
        <?php
        $query = "SELECT * FROM products  WHERE category = 'Accessories' ORDER BY prod_name ASC";
        $result = mysqli_query($dbconn, $query);
        $count = 0; 
         echo '<div class="row mt-5">';
        while ($res = mysqli_fetch_array($result)) {
            $prod_id = $res['prod_id'];
        ?>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <?php if ($res['prod_pic1'] != "") : ?>
                        <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="240px">
                    <?php else : ?>
                        <img src="../uploads/default.png" width="300px" height="200px">
                    <?php endif; ?>
                    <div class="caption">
                        <h5><b><?php echo $res['prod_name']; ?></b></h5>
                        <h6 class="m-3">
                           <a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id']; ?>"><i class="now-ui-icons gestures_tap-01"></i>View</a>
                           <span style="margin-left: 110px;">Rs: <?php echo $res['prod_price']; ?></span> <!-- Add margin-left -->
                    </h6>
                    </div>
                    
                </div>
                    <hr color="orange">
            </div>
                         
                    <?php }?> 
                    
                    </ul>
        </div>

<!-- --------- end----------- -->

<!-- ============= chrome book section========== -->
        
        <h3 id="chrome-books" class="title text-center">chrome Books</h3>
<div class="tab-pane shadow active" id="">
    <ul class="thumbnails">
        <?php
        $query = "SELECT * FROM products  WHERE category = 'Chrome Books' ORDER BY prod_name ASC";
        $result = mysqli_query($dbconn, $query);
        $count = 0; 
         echo '<div class="row mt-5">';
        while ($res = mysqli_fetch_array($result)) {
            $prod_id = $res['prod_id'];
        ?>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <?php if ($res['prod_pic1'] != "") : ?>
                        <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="240px">
                    <?php else : ?>
                        <img src="../uploads/default.png" width="300px" height="200px">
                    <?php endif; ?>
                    <div class="caption">
                        <h5><b><?php echo $res['prod_name']; ?></b></h5>
                        <h6 class="m-3">
                           <a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id']; ?>"><i class="now-ui-icons gestures_tap-01"></i>View</a>
                           <span style="margin-left: 110px;">Rs: <?php echo $res['prod_price']; ?></span> <!-- Add margin-left -->
                    </h6>
                    </div>
                    
                </div>
                    <hr color="orange">
            </div>
                         
                    <?php }?> 
                    
                    </ul>
        </div>

<!-- ---------- end ------------ -->


        <!-- ======= Accessories section ========== -->
        
        <style>
  
  .title {
    text-align: center; 
    font-size: 24px; 
    font-weight: bold;
    color: #ff6600; 
    margin: 20px 0; 
    text-transform: uppercase; 
    letter-spacing: 1px; 
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); 
    text-decoration: underline;  
}

  .title a {
    text-decoration: underline;  
    color: #ff6600; 
  }

</style>

<h3 id="tablets" class="title text-center">Tablets</h3>

<div class="tab-pane shadow active" id="">
    <ul class="thumbnails">
        <?php
        $query = "SELECT * FROM products  WHERE category = 'Tablets' ORDER BY prod_name ASC";
        $result = mysqli_query($dbconn, $query);
        $count = 0; 
         echo '<div class="row mt-5">';
        while ($res = mysqli_fetch_array($result)) {
            $prod_id = $res['prod_id'];
        ?>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <?php if ($res['prod_pic1'] != "") : ?>
                        <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="240px">
                    <?php else : ?>
                        <img src="../uploads/default.png" width="300px" height="200px">
                    <?php endif; ?>
                    <div class="caption">
                        <h5><b><?php echo $res['prod_name']; ?></b></h5>
                        <h6 class="m-3">
                           <a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id']; ?>"><i class="now-ui-icons gestures_tap-01"></i>View</a>
                           <span style="margin-left: 110px;">Rs: <?php echo $res['prod_price']; ?></span> <!-- Add margin-left -->
                    </h6>
                    </div>
                    
                </div>
                    <hr color="orange">
            </div>
                         
                    <?php }?> 
                    
                    </ul>
        </div>
<!-- ------------- end----------- -->


</div>
</div>     
</div>
                    

        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                       
						
						<li>Brought To You By <a href="https://code-projects.org/">code-projects</a> | Thanks to Billy Revellame</li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by Serve(8) Web Solutions, Inc.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>



   <!---  inserted  -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/bootstrap-affix.js"></script>
    <script src="../assets/js/jquery.lightbox-0.5.js"></script>
    <script src="../assets/js/bootsshoptgl.js"></script>
     <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>

    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../plugins/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../plugins/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>
     <!--  inserted  -->

</html>