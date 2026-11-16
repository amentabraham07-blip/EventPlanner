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
    $cid=$_SESSION['id'];
   
    if(isset($_POST['submit']))
    {
        $sname=$_POST['sname'];
        $fname=$_POST['fname'];
        $dname=$_POST['dname'];
        $kname=$_POST['kname'];
        $mname=$_POST['mname'];
        $iname=$_POST['iname'];
        $rate=$_POST['rate'];
        $oth=$_POST['oth'];
        $extra=$_POST['extra'];
        $minadvance=$_POST['minadvance'];
        move_uploaded_file($_FILES['photo'] ["tmp_name"], "image/".$_FILES['photo']["name"]);
        $photo="image/". $_FILES['photo']['name'];  
        $n=mysqli_query($conn, "insert into services(cid,sname,fname,dname,kname,mname,iname,rate,oth,extra,photo,minadvance)values('$cid','$sname','$fname','$dname','$kname','$mname','$iname','$rate','$oth','$extra','$photo','$minadvance')" );
      
    }
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
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="cb/assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="companyaddpackages.php"><i class="fa fa-anchor "></i>Add Packages</a>
                    </li>
                    <li>
                        <a href="companylistservice.php"><i class="fa fa-flash "></i>List Packages </a>
                    </li>
                      <li>
                        <a href="companylistbooking.php"><i class="fa fa-flash "></i>New Booking </a>

                    </li>
                    <li>
                        <a href="companyconfirmedbooking.php"><i class="fa fa-flash "></i>Confirmed Booking </a>
                    </li>
                    <li>
                        <a href="changepassword.php"><i class="fa fa-flash "></i>Change Password </a>
                    </li>
                      <li>
                        <a href="homepage.php"><i class="fa fa-flash "></i>Logout </a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> DIFFERENT SERVICES/PACKAGES ADD PAGE</h1>
                        <h1 class="page-subhead-line"></h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                                    <form method="post" enctype="multipart/form-data">
                                         <div class="form-group">
                                            <label>Service Name</label>
                                            <input class="form-control" type="text" name="sname" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Fruit items</label>
                                            <input class="form-control" type="text" name="fname" required  
                                        </div>
                                       <div class="form-group">
                                            <label>Drink items</label>
                                            <input class="form-control" type="text" name="dname" required  
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Snack Items</label>
                                            <input class="form-control" type="text"  name="kname" required  
                                        </div>
                                          <div class="form-group">
                                            <label>Main Dish</label>
                                            <input class="form-control" type="text"  name="mname" required  
                                        </div>
                                         <div class="form-group">
                                            <label>Ice Creams</label>
                                            <input class="form-control" type="text"  name="iname" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Rate per Head</label>
                                            <input class="form-control" type="text" name="rate" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Other Service</label>
                                            <input class="form-control" type="text" name="oth" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Extra Charge</label>
                                            <input class="form-control" type="text" name="extra" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Service Image</label>
                                            <input class="form-control" type="file" name="photo" required  
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum Advance Amount</label>
                                            <input class="form-control" type="text" name="minadvace" required  
                                        </div>
                                      <center>  <button type="submit" class="btn btn-danger" name="submit">SUBMIT</button></center>
                                    </form>
                            </div>
                        </div>
                            </div>

             <!--/.ROW-->
             
            
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
