<?php include "db.php" ;session_start();  

if (1==1) {
      $amount=mysqli_escape_string($conn,$_POST['amount']);
     $time=time();
     if ($amount=="") {
         echo "amount is empty";
     }
     else{
          $sql=mysqli_query($conn,"select * from deposit where email='".$_SESSION['user']."'");
          $rn=mysqli_num_rows($sql);


          $sqlh=mysqli_query($conn,"select * from history where email='".$_SESSION['user']."' and status='pending'");
          $rdn=mysqli_num_rows($sqlh);
if($rdn>0){
     echo "<script>alert('You have a pending transaction Complete or delete it before you start depositing again');</script>";
}else{

if($rn<1){
 $insert=mysqli_query($conn,"insert into deposit(email,amount,time,status)values('".$_SESSION['user']."','$amount','$time','pending')");
 $insert=mysqli_query($conn,"insert into  history(email,amount,date,status,message)values('".$_SESSION['user']."','$amount','$time','pending','you deposit')");
 echo "<script>swal('success','Request on process','success');</script>";


}   
else{
 $update=mysqli_query($conn,"update deposit set amount=amount+$amount,time='$time' where email='".$_SESSION['user']."'");
 $insert=mysqli_query($conn,"insert into  history(email,amount,date,status,message)values('".$_SESSION['user']."','$amount','$time','pending','you deposit')");
  echo "<script>swal('success','Request on process','success');</script>";
}

}
          

     }
}


?>