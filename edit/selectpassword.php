<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$password = $_POST['newpassword'];
$sql='update staff set password="'.$password.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);