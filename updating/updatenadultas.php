<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$nadultas = $_POST['newadultas'];
$sql="UPDATE `booking` set `n_adults`='$nadultas' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);