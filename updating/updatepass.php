<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$password = $_POST['newpassword'];
$sql="UPDATE `booking` set `password`='$password' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);