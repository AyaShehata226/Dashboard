<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newtwitter = $_POST['twitter'];
$sql="UPDATE `staff` set `Twitter_Profile`='$newtwitter' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);