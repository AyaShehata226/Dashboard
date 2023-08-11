<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$email = $_POST['newemail'];
$sql="UPDATE `booking` set `email`='$email' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);