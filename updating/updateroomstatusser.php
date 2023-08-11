<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$newstatus = $_POST['newstate'];
$sql="UPDATE `room` set `status`='$newstatus' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);