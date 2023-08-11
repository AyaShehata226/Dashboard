<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$numbeds = $_POST['newnumbeds'];
$sql="UPDATE `room` set `numbeds`='$numbeds' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoom2.php?eid=".$id);