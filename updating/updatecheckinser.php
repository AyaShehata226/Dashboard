<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$newcin = $_POST['newcin'];
$sql="UPDATE `room` set `cin`='$newcin' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);