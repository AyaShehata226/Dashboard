<?php
include '../connect.php';
session_start();
$id = $_SESSION['id'];

$pass=mysqli_escape_string($con,$_POST['password']);
$pass1=mysqli_escape_string($con,$_POST['newpassword']);
$pass2=mysqli_escape_string($con,$_POST['renewpassword']);

$q = "select email from staff where password = '$pass'";
$res = mysqli_query($con , $q);
$num = mysqli_num_rows($res);
     
      if($num >= 1)
      {
        if($pass1 == $pass2)
        {
            $sql = "update staff set password = '$pass1' where id = '$id'";
            $result = mysqli_query($con , $sql);
            header("location: ../users-profile2.php");
        }
        else
        {
            echo "New passwords doesn't match";
        }
      }
      else 
      {
        echo "Old password not correct";
      }

//header("location: ../users-profile.php");