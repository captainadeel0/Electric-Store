<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:admin_login_page.php');
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
    <title>E-Commerce</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     inserted     -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

</head>

<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="admin_index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by Serve(8) Web Solutions, Inc." data-placement="bottom" target="">
                    E-Commerce
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    <span class="navbar-toggler-bar bar4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_panel.php" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `admin` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo ''.$row['username'].'';
                                ?>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Electronic Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_login_page.php" class="nav-link" href="" onclick="scrollToDownload()">
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

        <div class="wrapper">
            <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/1.jpg');"></div>
                <div class="container">
                    <div class="content-center">
                        <div class="photo-container">
                            <img src="../assets/img/default-avatar.png" alt="">
                        </div>
                        <h2 class="title">
                            Admin Panel
                        </h2>
                        <p class="category">Administrator</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container">
                    <a href="" class="btn btn-primary btn-round btn-lg">Follow me on</a>
                    <a href="https://www.twitter.com" target="_blank" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
               <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <h4 class="title text-center">Administrator Dashboard</h4>
                       
                        
                       
                        
                    </div>
                    <!-- Tab panes -->
                   
                
                                    
                 <div class="container pt-4 px-4">
                <div class="row ">                   
                     <div class="col-sm-6 col-md-3 ">
                     <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"  href="show_products.php" role="tablist">
                                        <i class="now-ui-icons shopping_tag-content"></i>
                                    </a>
                                </li>
                            </ul>  
                     
                            <div class="ms-2">
                                <p class="mb-2">Total Products</p>
                                <?php
                                require_once("../config/dbconn.php");
                                $select = "SELECT * FROM products";
                                
                                $result = mysqli_query($dbconn, $select);
                                
                                if($products_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$products_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                                   
                                  
                            </div>
                        </div>
                    </div>


                                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"  href="show_supplier.php" role="tablist">
                                    <i class="now-ui-icons shopping_delivery-fast"></i>
                                    </a>
                                </li>
                            </ul>  
                            <div class="ms-3">
                                <p class="mb-2">Total Suppliers</p>
                                <?php
                                require_once("../config/dbconn.php");
                                $select = "SELECT * FROM supplier";
                                
                                $result = mysqli_query($dbconn, $select);
                                
                                if($supplier_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$supplier_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                                  
                            </div>
                        </div>
                    </div>


                                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="show_users.php" role="tablist">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    </a>
                                </li>
                            </ul>  

                            <div class="ms-3">
                                <p class="mb-2">Total Users</p>
                                <?php
                                require_once("../config/dbconn.php");
                                $select = "SELECT * FROM users";
                                
                                $result = mysqli_query($dbconn, $select);
                                
                                if($users_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$users_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                                  
                                  
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xl-3 ">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="orders.php" role="tablist">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    </a>
                                </li>
                            </ul>  

                            <div class="ms-3">
                                <p class="mb-2">Orders</p>
                                <?php
                                require_once("../config/dbconn.php");
                                $select = "SELECT * FROM order_details";
                                
                                $result = mysqli_query($dbconn, $select);
                                
                                if($orders_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$orders_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                                  
                                  
                            </div>
                        </div>
                    </div>


                   


                                   
                    <div class="col-sm-6 col-xl-3 mt-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="show_admins.php" role="tablist">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    </a>
                                </li>
                            </ul>  
                            
                            <div class="ms-3">
                                <p class="mb-2">Total Admins</p>
                                <?php
                                require_once("../config/dbconn.php");
                                $select = "SELECT * FROM admin";
                                
                                $result = mysqli_query($dbconn, $select);
                                
                                if($admins_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$admins_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                                
                            </div>
                        </div>
                    </div>
                                    
                    </div>
                    </div>

                        
                        

                    </div>
                </div>
            </div>
        </div>
        
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