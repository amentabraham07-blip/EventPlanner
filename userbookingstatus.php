<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
     <?php
    session_start();
    include "connection.php";
    $uid=$_SESSION['id'];
    $data=mysqli_query($conn,"select * from booking where uid='$uid'");
    ?>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#chefs" class="active">Make a Reservation</a></li>
                            <li class=""><a href="userbookingstatus.php">Reservation Status</a></li>
                            <li class="scroll-to-section"><a href="changepassword.php">Change Password</a></li>
                            <li class="scroll-to-section"><a href="homepage.php">Logout</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <hr>
    <hr>
    <br>
  <br>
    <!-- ***** Header Area End ***** -->
         <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            BOOKING STAUTUS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead> 
                                        <tr>
                                            <td>Booking No</td>
                                            <th>Function Date</th>
                                            <th>Customer Name</th>
                                            <th>Package Name</th>
                                            <th>No of Members</th>
                                           
                                            <th>Grand Amount</th>
                                            <th>Advance Amount</th>
                                            <th>Status</th>
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
                                            <td><?php echo $rs['payable'];?></td> 
                                            
                                            <?php
                                                $pid=$rs['pid'];
                                                $pdata=mysqli_query($conn,"select minadvance from services where id='$pid'");
                                                $prs=mysqli_fetch_array($pdata);
                                                ?>
                                                <td><?php echo $prs[0];?></td>
                                                <td><?php echo $rs['status'];?></td> 
                                             <?php
                                                if($rs['status']=='Pay Advance')
                                             {
                                            ?>
                                                 
                                                  
                                                 <td><a href="pay.php?id=<?php echo $rs['bno'];?>">Pay Now</a></td>
                                             <?php
                                             }
                                             else 
                                                {
                                                    ?>
                                                     <td></td>
                                               <?php      
                                                } 
                                               ?>   
                                            
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
    <!-- ***** Main Banner Area Start ***** -->
   

   
   

    
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
