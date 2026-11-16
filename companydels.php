<?php
include "connection.php";
$id=$_GET['id'];
$rec=mysqli_query($conn,"delete from services where id='$id'");
header('location:companylistservice.php');
?>