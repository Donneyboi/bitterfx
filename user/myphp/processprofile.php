<?php session_start(); 
include "db.php";
if (1==1) {


$firstname=mysqli_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_escape_string($conn,$_POST['lastname']);
$email=mysqli_escape_string($conn,$_POST['email']);
$number=mysqli_escape_string($conn,$_POST['number']);
$country=mysqli_escape_string($conn,$_POST['country']);
$state=mysqli_escape_string($conn,$_POST['state']);


if ($firstname=="") {
	 echo "<script>swal('success',firstname is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set firstname='$firstname' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}


if ($lastname=="") {
	 echo "<script>swal('success',lastname is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set lastname='$lastname' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}



if ($email=="") {
	 echo "<script>swal('success',email is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set email='$email' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}




if ($number=="") {
	 echo "<script>swal('success',phonenumber is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set number='$number' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}


if ($country=="") {
	 echo "<script>swal('success',country is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set country='$country' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}

if ($state=="") {
	 echo "<script>swal('success',state is empty','success');</script>";
}
else{
	$update=mysqli_query($conn,"update signup set state='$state' where id='".$_SESSION['user']."'");
	if ($update) {echo "<script>swal('success','Detail update','success');</script>";}
}





}
?>