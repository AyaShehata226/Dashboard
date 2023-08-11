<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$name = $_POST['newname'];
$sql="UPDATE `booking` set `name`='$name' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);
header("location:../editGuest2.php?eid=".$id);