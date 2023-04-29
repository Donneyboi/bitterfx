<?php include "db.php" ;session_start();  

if (1==1) {
      $amount=mysqli_escape_string($conn,$_POST['amount']);
     $time=time();
     if ($amount=="") {
         echo "amount is empty";
     }
     else{
          echo "<script>swal('Bot purchase','Wait While we process your request','success')</script>";
     
          

     }
}


?>