<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$roomn = $_POST['newroomn'];
$sql="UPDATE `booking` set `roomn`='$roomn' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);