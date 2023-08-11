<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$payment = $_POST['newpayment'];
$sql="UPDATE `booking` set `payment`='$payment' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);