<?php include "db.php"; session_start();
$old=mysqli_escape_string($conn,$_POST['oldp']);
$new=mysqli_escape_string($conn,$_POST['new']);
$select=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
$rr=mysqli_fetch_array($select);
$pass=$rr['password'];
if ($old=="") {
	echo "Enter Old password";
}
elseif($new==""){
echo "Enter New password";
}
elseif($old!=$pass){
	echo "incorrect password";
}

else{
	$update=mysqli_query($conn,"update signup set password='$new' where id='".$_SESSION['user']."'");
	if ($update) {
		echo "<script>swal('success','password updated','success')</script>";
	}
}



  ?>