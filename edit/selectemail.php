<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$email = $_POST['newemail'];
$sql='update staff set email="'.$email.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);?>
