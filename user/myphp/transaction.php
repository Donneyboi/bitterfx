<?php session_start(); include "db.php";
if(!isset($_SESSION['user'])){
    header("Location:../../index.html");
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BittrexFx</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/transaction.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<script type="text/javascript" src="../java/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../java/sweetalert-dev.js"></script>
</head>
<body>
	<?php include "head.php"  ?>
	<main>
	<div class="div_body">
	<?php include "side.php";  ?>

	
	<div class="container">
		<h3 class="t">Transactoin History</h3>
		<div class="transaction_div">
			<?php $sql=mysqli_query($conn,"select * from history where email='".$_SESSION['user']."'");
              while($arr=mysqli_fetch_array($sql)){
              	$move=$arr['message'];
              	$amout=$arr['amount'];
              	$status=$arr['status'];
              	$time=$arr['date'];
              	$t=date("h:i",$time);
			 ?>
			<div class="transaction_smail_div">
					<span class="my_row"><?php echo $move;  ?></span>
				<span class="my_row"> $ <?php echo number_format($amout);  ?></span>
				<span class="my_row"><?php echo $status;  ?></span>
					<span class="my_row"><?php echo $t  ?></span>
			</div>
		<?php } ?>
		</div>
	</div>
	</main>

	</div>


	

</body>
</html>