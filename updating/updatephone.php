<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$phone = $_POST['newphone'];
$sql="UPDATE `booking` set `phone`='$phone' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);