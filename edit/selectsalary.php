<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$salary = $_POST['newsalary'];
$sql='update staff set salary="'.$salary.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);