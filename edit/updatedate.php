<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$date = $_POST['newdate'];
$sql='update staff set date_join="'.$date.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);