<?php
include('connect.php');
$userid = $_POST['name'];
$pass = $_POST['name2'];
$sql = "select * from masterlogin where userid='$userid' and passwd='$pass' ";
$res = mysqli_query($conn, $sql);

$temp=false;
if ($result = mysqli_fetch_assoc($res)) {
  
   header('location:dashboard.php');
} else {
   $temp=true;
   header('location:login.php');
}
