<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="cb/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="cb/assets/css/font-awesome.css" rel="stylesheet" />
     <!--PAGE LEVEL STYLES-->
    <link href="cb/assets/css/pricing.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="cb/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="cb/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php

session_start();
include "connection.php";
$cid=$_GET['id'];
$data=mysqli_query($conn,"select * from services where cid='$cid'");

?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Welcome <?php echo $_SESSION['name'];?></a>
            </div>

            <div class="header-right">

               <a href="userpage.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                        

                            <div class="inner-text">
                                User ID :
                            <br />
                                User Name : </small>
                            </div>
                        </div>

                    </li>


                   
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Pricing Options</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              <div class="row text-center pad-row">
                <?php
                 while($rs=mysqli_fetch_array($data))
                 {

                 ?>
              <div class="col-md-3">
                    <div class="panel normal-table panel-danger adjust-border-radius">
                        <div class="panel-heading adjust-border">
                            <h4><?php echo $rs['sname'];?></h4>
                        </div>
                        <div class="panel-body">

                            <ul class="plan">
                                <li class="price"><strong><?php echo $rs['rate'];?></strong> <i class="fa fa-dollar"></i><small>/head</small></li>
                                <li><i class="fa fa-paper-plane-o"></i><strong>Fruits :</strong><?php echo $rs['fname'];?></li>
                                <li><i class="fa fa-graduation-cap"></i><strong>Drinks :</strong><?php echo $rs['dname'];?></li>
                                <li><i class="fa fa-bolt"></i><strong>Snacks :</strong><?php echo $rs['kname'];?></li>
                                <li><i class="fa fa-bars"></i><strong>Main Dish : </strong><?php echo $rs['mname'];?></li>
                                
                                <li><i class="fa fa-paper-plane-o"></i><strong>Ice Creams :</strong><?php echo $rs['iname'];?></li>
                                <li><i class="fa fa-graduation-cap"></i><strong>Other Service :</strong><?php echo $rs['oth'];?></li>
                                <li><i class="fa fa-bolt"></i><strong>Extra Charge :</strong><?php echo $rs['extra'];?></li>
                                <li><i class="fa fa-bars"></i><img src="<?php echo $rs['photo'];?>" height="250" height="250"/></li>
                                 <li><i class="fa fa-bolt"></i><strong>Minimum Advance :</strong><?php echo $rs['minadvance'];?></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="UserBooking.php?id=<?php echo $rs['id'];?>" class="btn btn-danger btn-block btn-lg adjust-border-radius">Book Now</a>
                        </div>
                    </div>
                </div>
                <?php
                 }
                 ?>
                
                
               
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="cb/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="cb/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="cb/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="cb/assets/js/custom.js"></script>


</body>
</html>
