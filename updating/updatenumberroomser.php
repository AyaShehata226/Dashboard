<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$numr = $_POST['newnumr'];
$sql="UPDATE `room` set `numr`='$numr' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);