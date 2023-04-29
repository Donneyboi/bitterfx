<?php  include "db.php"; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/widthdraw.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
</head>
<body>
<?php include "head.php"; ?>
<main>
<div class="dashboard_body">
<?php include "side.php"; ?>
<div class="container widthdraw">
	<h3>Profit Request</h3>


	<div class="mytabel">
		<div class="row q">
		<span>Email</span>
		<span>Amount</span>
		<span>Status</span>
		<span>Time</span>
		<span>Action</span>
		 </div>
	<hr>
			 <?php $sql=mysqli_query($conn,"select * from deposit where  status='confirm'");
         while ($arr=mysqli_fetch_array($sql)) {
               $email=$arr['email'];
               $amount=$arr['amount'];
               $status=$arr['status'];
               $id=$arr['id'];
               $time=$arr['time'];
        $select=mysqli_query($conn,"select * from signup where id='$email'");
        $pick=mysqli_fetch_array($select);
        $firstname=$pick['firstname'];
         $lastname=$pick['lastname'];
		  ?>
		 <div class="row">
		<span><p>Email</p><?php  echo $firstname." ".$lastname;  ?></span>
		<span><p>Amount</p>$ <?php  echo number_format($amount); ?></span>
		<span><p>status</p><?php  echo $status; ?></span>
		<span><p>time</p><?php  echo $time; ?></span>
		<span>
		<a href="proprofit.php?fff=<?php echo $email; ?>">showx</a></span>
		
		
		 </div>
		 <hr>
		<?php  } ?>



	</div>
	



	</div>
</div>
</div>
</main>
</body>
</html>