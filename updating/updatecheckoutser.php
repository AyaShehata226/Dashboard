<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$newcout = $_POST['newcout'];
$sql="UPDATE `room` set `cout`='$newcout' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);