<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$nchildren = $_POST['newchildren'];
$sql="UPDATE `booking` set `n_children`='$nchildren' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);