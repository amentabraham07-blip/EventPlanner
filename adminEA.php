<?php
include "connection.php";
$id=$_GET['id'];
$rec=mysqli_query($conn,"update company set rights='C' where id='$id'");
header('location:admincompanyapproval.php');
?>