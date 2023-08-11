<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$roomn = $_POST['newroomn'];
$sql="UPDATE `room` set `roomnumber`='$roomn' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);