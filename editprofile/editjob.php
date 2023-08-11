<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newjob = $_POST['newjob'];
echo $id;
$sql="UPDATE `employees` set `staff`='$newjob' WHERE `staff_id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);