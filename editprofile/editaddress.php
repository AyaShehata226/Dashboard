<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newaddress = $_POST['newaddress'];
$sql="UPDATE `staff` set `address`='$newaddress' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);