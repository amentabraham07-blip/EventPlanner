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
   $cid=$_SESSION['id'];
   $name=$_SESSION['name'];
   include "connection.php";
   $data=mysqli_query($conn, "select * from booking  where cid='$cid' and status='New Booking'");
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
                        <a href="companylistservice.php"><i class="fa fa-flash "></i>Change Password </a>
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
                        <h1 class="page-head-line">LIST SERVICE PAGE</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead> 
                                        <tr>
                                            <th>Booking No</th>
                                            <th>Function Date</th>
                                            <th>Customer Name</th>
                                            <th>Package Name</th>
                                            <th>No of Members</th>
                                            <th>Rate per Head</th>
                                            <th>Total</th>
                                            <th>Extra Charge</th>
                                            <th>Payable Amount</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                         while($rs=mysqli_fetch_array($data))
                                         {
                                        ?>
                                        <tr>
                                            <td><?php echo $rs['bno'];?></td>
                                            <td><?php echo $rs['fdate'];?></td>
                                            <?php
                                                $uid=$rs['uid'];
                                                $udata=mysqli_query($conn,"select name from user where id='$uid'");
                                                $urs=mysqli_fetch_array($udata);
                                            ?>    
                                            <td><?php echo $urs['name'];?></td>
                                            <?php
                                                $pid=$rs['pid'];
                                                $pdata=mysqli_query($conn,"select sname from services where id='$pid'");
                                                $prs=mysqli_fetch_array($pdata);
                                            ?>    
                                            <td><?php echo $prs['sname'];?></td>
                                            <td><?php echo $rs['nop'];?></td>
                                            <td><?php echo $rs['rate'];?></td>
                                            <td><?php echo $rs['tcharge'];?></td>
                                            <td><?php echo $rs['extra'];?></td>
                                            <td><?php echo $rs['payable'];?></td> 
                                            <td><a href="companyapp.php?id=<?php echo $rs['bno'];?>">Accept</a></td>
                                            <td><a href="companyreject.php?id=<?php echo $rs['bno'];?>">Reject</a></td>
                                        </tr>
                                        <?php
                                         }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            </div>
                <!-- /. ROW  -->
           
                
                     <!--  End  Bordered Table  -->
                
           
                <!-- /. ROW  -->
           
               
                <!-- /. ROW  -->

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
