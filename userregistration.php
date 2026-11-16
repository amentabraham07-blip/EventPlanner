<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Klassy Cafe - User Registration</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">

  <style>
    /* --- Main Section Layout --- */
    .main-section {
      display: flex;
      flex-wrap: wrap;
      min-height: 100vh;
      overflow: hidden;
    }

    /* Left: Slider Section */
    .slider-section {
      flex: 1;
      min-width: 50%;
      position: relative;
    }

    .Modern-Slider .item {
      height: 100vh;
    }

    .Modern-Slider .img-fill img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }

    /* Right: Registration Form */
    .form-section {
      flex: 1;
      min-width: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff;
      padding: 60px;
    }

    .contact-form {
      background-color: #ffffff;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .contact-form h4 {
      text-align: center;
      font-weight: 600;
      color: #333;
      margin-bottom: 25px;
    }

    .contact-form input {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid #ddd;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .main-button-icon {
      background-color: #fb5849;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 10px;
      width: 100%;
      transition: 0.3s;
    }

    .main-button-icon:hover {
      background-color: #e14a3c;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
      .main-section {
        flex-direction: column;
      }
      .Modern-Slider .item {
        height: 300px;
      }
      .form-section {
        padding: 40px 20px;
      }
    }
  </style>
</head>
 <?php
    include "connection.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $uname=$_POST['uname'];
        $pword=$_POST['pword'];
        
        $n=mysqli_query($conn, "insert into user(name,phone,email,uname,pword)values('$name','$phone','$email','$uname','$pword')" );
        if($n>0)
            header('location:homepage.php');
        else
            echo "<script> alert('Registration Failed......');</script>";
    }
    ?>
<body>

  <!-- Header -->
  <header class="header-area header-sticky">
    <div class="container">
      <nav class="main-nav">
        <a href="index.html" class="logo">
          <img src="assets/images/klassy-logo.png" alt="Klassy Cafe">  USER REGISTRATION PAGE
        </a>
        <ul class="nav">
          <li><a href="homepage.php" class="active">Home</a></li>
          
        </ul>
        <a class='menu-trigger'><span>Menu</span></a>
      </nav>
    </div>
  </header>

  <!-- Main Section (Slider Left, Form Right) -->
  <section class="main-section">
     <!-- Right: Registration Form -->
    <div class="form-section">
      <div class="contact-form">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
          <h4></h4>
          <input name="name" type="text" placeholder="Full Name" required>
          <input name="phone" type="text" placeholder="Phone Number" required>
          <input name="email" type="email" placeholder="Email Address" required>
          <input name="uname" type="text" placeholder="Username" required>
          <input name="pword" type="password" placeholder="Password" required>
          <button type="submit" name="submit" class="main-button-icon">Register Now</button>
        </form>
      </div>
    </div>

    <!-- Left: Working Slider -->
    <div class="slider-section">
      <div class="Modern-Slider">
        <!-- Slide 1 -->
        <div class="item">
          <div class="img-fill">
            <img src="assets/images/slide-01.jpg" alt="Slide 1">
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="item">
          <div class="img-fill">
            <img src="assets/images/slide-02.jpg" alt="Slide 2">
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="item">
          <div class="img-fill">
            <img src="assets/images/slide-03.jpg" alt="Slide 3">
          </div>
        </div>
      </div>
    </div>

   
  </section>

  <!-- Footer -->
  <footer>
    <div class="container text-center py-3">
      <p>© Copyright Amen@mes.com | Design and Developed By: amen</p>
    </div>
  </footer>

  <!-- JS Scripts -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Auto-slide setup using Slick
    $(document).ready(function () {
      $('.Modern-Slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        fade: true,
        speed: 1000,
      });
    });
  </script>

</body>
</html>
