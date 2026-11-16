<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="adminback/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="adminback/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="adminback/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="adminback/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<?php
   session_start();
   $cid=$_SESSION['id'];
   $name=$_SESSION['name'];
   include "connection.php";
   $data=mysqli_query($conn, "select * from booking");
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
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="adminback/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   <li>
                        <a  href="admincompanyapproval.php"><i class="fa fa-desktop fa-3x"></i> Company Approval</a>
                    </li>
                    <li>
                        <a  href="adminbookingreport.php"><i class="fa fa-qrcode fa-3x"></i> Booking Report</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i>Change Password</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Logout</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>BOOKING REPORT</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
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
                                            <th >Status</th>
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
                                            <td><?php echo $rs['status'];?></td> 
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
           
                    <!--  End  Striped Rows Table  -->
              
           
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="adminback/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="adminback/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="adminback/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="adminback/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="adminback/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="adminback/assets/js/custom.js"></script>
    
   
</body>
</html>
