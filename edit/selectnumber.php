<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$number = $_POST['newnumber'];
$sql='update staff set number="'.$number.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);