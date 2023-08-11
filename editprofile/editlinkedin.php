<?php 
session_start();
include('../connect.php');
$id = $_SESSION['id'];
$newlinkedin = $_POST['linkedin'];
$sql="UPDATE `staff` set `Linkedin_Profile`='$newlinkedin' WHERE `id`='$id'";
$query = mysqli_query($con , $sql);

header("location:../users-profile2.php?eid=".$id);