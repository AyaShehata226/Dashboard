<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$type = $_POST['type'];
$sql="UPDATE `room` set `roomtype`='$type' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);