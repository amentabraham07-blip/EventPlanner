<!DOCTYPE html>
<html lang="en">
    <script>
function calculateTotal() {
    // get field values
    const rate = parseFloat(document.getElementById('rate').value) || 0;
    const no = parseInt(document.getElementById('no').value) || 0;
    const extra = parseFloat(document.getElementById('extra').value) || 0;

    // calculate totals
    const tot = rate * no;
    const payable = tot + extra;

    // update fields
    document.getElementById('total').value = tot.toFixed(2);
    document.getElementById('payable').value = payable.toFixed(2);
}
</script>
    <head>
        <meta charset="utf-8">
        <title>AutoWash - Car Wash Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico' %}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="up2/lib/animate/animate.min.css" rel="stylesheet">
        <link href="up2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="up2/css/style.css" rel="stylesheet">
    </head>
<?php
session_start();
include "connection.php";
$sid=$_GET['id'];
$data=mysqli_query($conn,"select * from services where id='$sid'");
$rs=mysqli_fetch_array($data);
$cid=$rs['cid'];
$sname=$rs['sname'];
$rate=$rs['rate'];
$extra=$rs['extra'];
$uid=$_SESSION['id'];
$uname=$_SESSION['name'];
$cdata=mysqli_query($conn,"select cname from company where id='$cid'");
$crs=mysqli_fetch_array($cdata);
$cname=$crs[0];
$nextno=mysqli_query($conn,"select max(bno)+1 from booking");
$mx=mysqli_fetch_array($nextno);
if(empty($mx[0]))
  $bno=1;
 else
  $bno=$mx[0];	 

if (isset($_POST['submit']))
{
    $no=$_POST['no'];
    $total=$_POST['total'];
    $extra=$_POST['extra'];
    $payable=$_POST['payable'];
    $fdate=$_POST['fdate'];
    $n=mysqli_query($conn,"insert into booking (bno,fdate,uid,cid,pid,rate,nop,tcharge,extra,payable) values('$bno','$fdate','$uid','$cid','$sid','$rate','$no','$total','$extra','$payable')");
    if($n>0)
         echo "<script> alert('Registration Success: $bno'); window.location.href='userpage.php';</script>";
}

?>
<body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Catering<span></span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="userbookingstatus.php" class="nav-item nav-link">View Booking</a>
                            <a href=/cpw/" class="nav-item nav-link">Change Password</a>
                            <a href="homepage.php" class="nav-item nav-link">Logout</a>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Booking</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Booking</p>
                            <h2>details</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Catering Service</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Catering Service</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Catering Service</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Catering Service</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Booking Details</h3>
                            <form method="post">
    <div class="control-group">
        Bno <input type="text" class="form-control" value="<?php echo $bno; ?>" readonly />
    </div>

    <div class="control-group">
        Function Date <input type="date" class="form-control" name="fdate" required />
    </div>

    <div class="control-group">
        Customer Name <input type="text" class="form-control" value="<?php echo $uname; ?>" readonly />
    </div>

    <div class="control-group">
        Catering Company Name <input type="text" class="form-control" value="<?php echo $cname; ?>" readonly />
    </div>

    <div class="control-group">
        Package Name <input type="text" class="form-control" value="<?php echo $sname; ?>" readonly />
    </div>

    <div class="control-group">
        Rate <input type="text" id="rate" class="form-control" value="<?php echo $rate; ?>" readonly />
    </div>

    <div class="control-group">
        Number of Persons
        <input type="number" id="no" name="no" class="form-control" oninput="calculateTotal()" required />
    </div>

    <div class="control-group">
        Total <input type="text" id="total" name="total" class="form-control" readonly />
    </div>

    <div class="control-group">
        Extra Charge <input type="number" id="extra" class="form-control" name="extra" value="<?php echo $extra; ?>" readonly />
    </div>

    <div class="control-group">
        Total Payable <input type="number" id="payable" class="form-control" name="payable" readonly />
    </div>

    <div>
        <button class="btn btn-custom" type="submit" name="submit">Send Request</button>
    </div>
</form>

<script>
function calculateTotal() {
    // get field values
    const rate = parseFloat(document.getElementById('rate').value) || 0;
    const no = parseInt(document.getElementById('no').value) || 0;
    const extra = parseFloat(document.getElementById('extra').value) || 0;

    // calculate totals
    const tot = rate * no;
    const payable = tot + extra;

    // update fields
    document.getElementById('total').value = tot.toFixed(2);
    document.getElementById('payable').value = payable.toFixed(2);
}
</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->
        
        
        <!-- Footer Start -->
        <div class="footer">
            
            <div class="container copyright">
                <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="up2/lib/easing/easing.min.js"></script>
        <script src="up2/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="up2/lib/waypoints/waypoints.min.js"></script>
        <script src="up2/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="up2/mail/jqBootstrapValidation.min.js"></script>
        <script src="up2/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="up2/js/main.js"></script>

    </body>
</html>
