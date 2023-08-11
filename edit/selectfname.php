<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$fname = $_POST['newfname'];
$sql='update staff set fname="'.$fname.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);?>
