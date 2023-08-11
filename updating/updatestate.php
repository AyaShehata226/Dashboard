<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$status = $_POST['newstate'];
$sql="UPDATE `booking` set `status`='$status' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);