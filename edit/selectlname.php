<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$lname = $_POST['newlname'];
$sql='update staff set lname="'.$lname.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);