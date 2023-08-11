<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$cout = $_POST['newcout'];
$sql="UPDATE `booking` set `cout`='$cout' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);