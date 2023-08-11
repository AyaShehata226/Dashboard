<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newcountry = $_POST['newcountry'];
$sql="UPDATE `staff` set `Country`='$newcountry' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);