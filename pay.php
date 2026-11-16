<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
   <link href="payback/style.css" rel="stylesheet" type="text/css" />
</head>
<script src="payback/ss.js" type="text/javascript"></script>
 <?php
    session_start();
    include "connection.php";
    $uid=$_SESSION['id'];
    $bno=$_GET['id'];
    $data=mysqli_query($conn,"select * from booking where bno='$bno'");
    $rs=mysqli_fetch_array($data);
    $pid=$rs['pid'];
    $sdata=mysqli_query($conn,"select sname,minadvance from services where id='$pid'");
    $sres=mysqli_fetch_array($sdata);
if(isset($_POST['submit']))
{
    $cno=$_POST['cno'];
    $n=mysqli_query($conn,"update booking set status='Confirmed',cardno='$cno' where bno='$bno'");
    header('location:userpage.php');
    

}
    ?>

<body>

<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Booking Advance</h2>
        <div class='line'></div>
        Booking No  :<?php echo $bno;?>
        <div class='line'></div>
        Customer  :<?php echo $_SESSION['name'];?>
        <div class='line'></div>
        Service  :<?php echo $sres[0];?>
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>Booking Advance</div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'><?php echo $sres[01];?></div>
            $<?php echo $sres[1];?>
          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <table class='half-input-table'>
              <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>American Express</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
           <form method="post">
            Card Number
            <input class='input-field' name="cno" required></input>
            Card Holder
            <input class='input-field' required></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field' required></input>
                </td>
                <td>CVC
                  <input class='input-field' required></input>
                </td>
              </tr>
            </table>
            <button class='pay-btn' type="submit" name="submit">Pay Now</button>
           </form    
          </div>

        </div>
      </div>
</div>
</body>
</html>