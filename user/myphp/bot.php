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
	<link rel="stylesheet" type="text/css" href="../css/bot.css">
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

	
	<div class="container zz">
		<div class="bot_div">
			<a href="prosses_bot.php" class="smaill_bot b1" style="background-image: url('../img/bot3.webp');">
				<div class="bot_name">
					<h3>Smart Bot</h3><br>
					<h3>$5,000</h3>
				</div>
			</a>

			<a href="prosses_bot.php" class="smaill_bot b1" style="background-image: url('../img/bot1.webp');">
				<div class="bot_name">
					<h3>Brilliant Bot</h3>
					<h3>$7,000</h3>
				</div>
			</a>


			<a href="prosses_bot.php" class="smaill_bot b1" style="background-image: url('../img/bot2.webp');">
				<div class="bot_name">
					<h3>Genius Bot</h3>
					<h3>$10,000</h3>
				</div>
			</a>


		</div>

		

	</div>


	</main>

	</div>

</body>
</html>