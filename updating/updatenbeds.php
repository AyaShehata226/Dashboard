<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$nbeds = $_POST['nbeds'];
$sql="UPDATE `booking` set `nbeds`='$nbeds' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);