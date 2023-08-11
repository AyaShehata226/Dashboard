<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$shift = $_POST['newshift'];
$sql='update staff set shift="'.$shift.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);