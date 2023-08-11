<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$meal = $_POST['newmeal'];
$sql="UPDATE `booking` set `meal`='$meal' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);