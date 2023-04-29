<?php include "db.php" ;session_start(); 

if (1==1) {
$amount=mysqli_escape_string($conn,$_POST['amount']);
$address=mysqli_escape_string($conn,$_POST['address']);
$min=1000;
 $time=time();
if ($amount=="") {
   echo "amount is empty";
}
else if($address==""){echo "input your wallet address";
 } 
 else if($amount<$min){
   echo "<script>swal('Error','Minimum withdarwal is $1000','error');</script>";
 }
 else{
   $sql=mysqli_query($conn,"select * from deposit where email='".$_SESSION['user']."' and status='confirm'");
   $arr=mysqli_fetch_array($sql);
 $mainamount=$arr['amount'];

   if ($amount>$mainamount) {
      echo "insufficient banlace";
   }
   else{

     $sqll=mysqli_query($conn,"select * from withdarw where email='".$_SESSION['user']."'");
          $rn=mysqli_num_rows($sqll);
          if ($rn<1) {
     
      $insert=mysqli_query($conn,"insert into withdarw(email,amount,status,time,address)values('".$_SESSION['user']."','$amount','pending','$time','$address')");
       $insertx=mysqli_query($conn,"insert into  history(email,amount,date,status,message)values('".$_SESSION['user']."','$amount','$time','pending','you withdarw')");
          }

          else{
             $updatew=mysqli_query($conn,"update deposit set amount=amount-$amount,time='$time' where email='".$_SESSION['user']."'");
 $insertx=mysqli_query($conn,"insert into  history(email,amount,date,status,message)values('".$_SESSION['user']."','$amount','$time','pending','you withdarw')");
          }
     
   }
 }
}




?>
