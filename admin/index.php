<?php include "db.php"; session_start(); 
if (!isset($_SESSION['admin'])) {
	header("Location:../index.html");
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bittrexfx</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
</head>
<body>
<?php include "head.php"; ?>
<main>
<div class="dashboard_body">
<?php include "side.php"; ?>
<div class="container">

<div class="admin_blance_div">
	<div class="balance">
		<p>Total<i class="fa fa-wallet icon"></i></p>
		<h3><i class="fa fa-coins icon"></i>nothing day for now</h3>
	</div>
	<div class="balance" style="background: rgb(145, 8, 134);">
		<p>Deposit<i class="fa fa-arrow-up icon"></i></p>
		<h3><i class="fa fa-coins icon"><?php $sqlid=mysqli_query($conn, " select  sum(amount) as total from  deposit");
		$rrd=mysqli_fetch_array($sqlid);
		 $amtt=$rrd['total'];
		 echo $amtt;
		 ?></i>
		</h3>
	</div>
	<div class="balance" style="background: rgb(39, 96, 150);">
		<p>Withdraw<i class="fa fa-arrow-down icon"></i></p>
		<h3><i class="fa fa-coins icon"></i> $<?php $sqli=mysqli_query($conn, " select  sum(amount) as total from withdarw");
		$rr=mysqli_fetch_array($sqli);
		 $amt=$rr['total'];
		 echo number_format($amt);
		 ?></h3>
	</div>
</div>

<!---------------------------------------->
<div class="statics">
	
</div>


</div>
</div>
</main>
</body>
</html>