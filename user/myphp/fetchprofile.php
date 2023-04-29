<?php session_start(); include "db.php";
$sql=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
$arr=mysqli_fetch_array($sql);
$profile=$arr['profile'];
echo $profile;
 ?>