<?php  include"db.php"; session_start();

if (1==1) {
  $email=$_SESSION['user'];
  $rand=mt_rand().mt_rand();
  echo $filename=$rand.basename($_FILES['profile']['name']);
  echo $folder="../profile/";
  $join=$folder.$filename;
  $filename2=$filename;
  $move=move_uploaded_file($_FILES['profile']['tmp_name'],$join);
  if ($move) {
     $upadet=mysqli_query($conn," update signup set profile='$filename2' where id='$email'");

  }

}




?>