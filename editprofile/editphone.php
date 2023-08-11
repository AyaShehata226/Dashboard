<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newphone = $_POST['newphone'];
$sql="UPDATE `staff` set `phone`='$newphone' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);