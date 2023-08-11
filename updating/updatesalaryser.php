<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$newsalary = $_POST['salary'];
$sql="UPDATE `room` set `roomprice`='$newsalary' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editRoomService2.php?eid=".$id);