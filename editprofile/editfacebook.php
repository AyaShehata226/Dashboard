<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newfacebook = $_POST['facebook'];
$sql="UPDATE `staff` set `Facebook_Profile`='$newfacebook' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);