<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newinstagrame = $_POST['instagrame'];
$sql="UPDATE `staff` set `Instagram_Profile`='$newinstagrame' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);