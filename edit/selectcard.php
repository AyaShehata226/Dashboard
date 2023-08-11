<?php 
session_start();
include('../connect.php');
$id = $_SESSION['user'];
$card = $_POST['newcard'];
$sql='update staff set card="'.$card.'" where id="'.$id.'"';
$query = mysqli_query($con , $sql);

header("location:../index2.php?eid=".$id);