<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newemail = $_POST['newemail'];
$sql="UPDATE `staff` set `email`='$newemail' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);