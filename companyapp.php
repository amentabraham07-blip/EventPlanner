<?php
include "connection.php";
$id=$_GET['id'];
$rec=mysqli_query($conn,"update booking set status='Pay Advance' where bno='$id'");
header('location:companylistbooking.php');
?>