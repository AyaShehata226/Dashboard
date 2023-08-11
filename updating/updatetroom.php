<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$troom = $_POST['newtroom'];
$sql="UPDATE `booking` set `troom`='$troom' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);