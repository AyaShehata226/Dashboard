<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$expired = $_POST['newexpire'];
$sql="UPDATE `booking` set `expired`='$expired' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);