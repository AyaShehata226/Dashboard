<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$cin = $_POST['newcin'];
$sql="UPDATE `booking` set `cin`='$cin' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);