<?php 
session_start();
include('../db.php');
$id = $_SESSION['user'];
$card_num = $_POST['newcard'];
$sql="UPDATE `booking` set `card_num`='$card_num' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../editGuest2.php?eid=".$id);