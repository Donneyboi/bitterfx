<?php session_start(); include "db.php";
if (1==1) {
	 $num=mysqli_escape_string($conn,$_POST['number']);
	 $userr=mysqli_escape_string($conn,$_POST['user']);
	 if ($num=="") {
	 echo"<script>swal('Error','Profit is empty','error');</script>";
	 }

	 else{
	$up=mysqli_query($conn,"update signup set earning=earning+$num where id='$userr'");
	if ($up) {
	 echo"<script>swal('Error','sent','error');</script>";
	}
	 }
}

 ?>
 