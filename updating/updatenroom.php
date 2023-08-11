<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$nroom = $_POST['newnroom'];
$sql="UPDATE `booking` set `nroom`='$nroom' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);