<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newname = $_POST['newfname'];
echo $id;
$sql="UPDATE `staff` set `fname`='$newname' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);