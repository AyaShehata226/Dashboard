<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$staff = $_POST['newstaff'];
$sql='update staff set staff="'.$staff.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);?>