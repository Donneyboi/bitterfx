<?php include "db.php"; session_start();
if (1==1) {
$firstname=mysqli_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_escape_string($conn,$_POST['lastname']);
$number=mysqli_escape_string($conn,$_POST['number']);
$email=mysqli_escape_string($conn,$_POST['email']);
$country=mysqli_escape_string($conn,$_POST['country']);
$state=mysqli_escape_string($conn,$_POST['state']);
$password=mysqli_escape_string($conn,$_POST['password']);
$cpassword=mysqli_escape_string($conn,$_POST['cpassword']);



if ($firstname=="") {
	echo "firstname is empty";
}
elseif ($lastname=="") {
	echo "lastname is empty";
}
elseif ($number=="") {
	echo "PhoneNumber is empty";
}
elseif($email==""){
	echo "Email is empty";
}
 elseif ($country=="") {
 	echo "country is empty";
 }
 elseif ($state=="") {
 	echo "state is empty";
 }
 elseif ($password=="") {
 	echo "password is empty";
 }
 elseif ($cpassword!=$password) {
 	echo "password does not mach";
 }
 else{
 	$sql=mysqli_query($conn,"select * from signup where email='$email'");
 	$num=mysqli_num_rows($sql);
 	if ($num>0) {
 		echo "E-mail Already Exit";
 	}
 	else{
 		$sqlselct=mysqli_query($conn,"insert into signup(firstname,lastname,email,number,country,state,password)values('$firstname','$lastname','$email','$number','$country','$state','$password')");

           

        $inserid=mysqli_insert_id($conn);
 		if ($sqlselct) {
 			$_SESSION['user']=$inserid;
 			//header("location:user/myphp/index.php");
            echo"   <script type='text/javascript'>
            window.location.href='user/myphp/index.php'</script>";
 		}
 	}
 }


 }
 ?>