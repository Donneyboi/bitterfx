<?php include "db.php"; session_start();
if (1==1) {
  $email=mysqli_escape_string($conn,$_POST['email']);
  $password=mysqli_escape_string($conn,$_POST['password']);
  if ($email=="") {
  	echo "E-mail is empty";
  }
  elseif($password==""){
 echo "password is empty";
  }

  else{
    $admin=mysqli_query($conn,"select * from admin where email='$email' and password='$password'");
  	$admrow=mysqli_num_rows($admin);
  	$arr=mysqli_fetch_array($admin);
  	


  	$sql=mysqli_query($conn,"select * from signup where email='$email' and password='$password'");
  	$user=mysqli_num_rows($sql);
  	$userarr=mysqli_fetch_array($sql);
  	



  	if ($admrow>0) {
      $adminid=$arr['id'];
  		$_SESSION['admin']=$adminid;
            echo"<script type='text/javascript'>
          window.location.href='admin/index.php'</script>";
  	}
  	elseif($user>0) {
      $userid=$userarr['id'];
  		$_SESSION['user']=$userid;
  		  echo"<script type='text/javascript'>
          window.location.href='user/myphp/index.php'</script>";
  	}
  	else{
  		echo "user not found";
  	}

  }
}



  ?>