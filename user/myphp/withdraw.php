<!DOCTYPE html>
<?php session_start(); include "db.php";
if(!isset($_SESSION['user'])){
    header("Location:../../index.html");
}?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BittrexFx</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/formwd.css">
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
		<!-------------------------------------------->
		<div class="withdraw_div">
			<h2 class="tittless">Withdraw Funds</h2>
			<hr style="width: 90%;margin-left: 30px;">


		<div class="loadmyp">
			
		</div>
		
			  <script type="text/javascript">
				$(document).ready(function () {
				$('.withd').on('submit',function (para) {
					para.preventDefault();
					$.ajax({
				url:"processwithdraw.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                    $('.loadmyp').html('<div class="ajax"><img src="../img/loading.gif"></div>');
                     $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                 	$('.loadmyp').html(para2);
                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

					})
				});
				})
			</script>
			<form class="withdraw_form withd" action="processwithdraw.php" method="post" id="withderw">
				<input type="text" name="amount" placeholder="Amount">
				<input type="text" name="address" placeholder="Wallet Address">
			    <select>
			    	<option>Select Withdrawal Method</option>
			    </select>
			    <input type="submit" name="" value="Withdrawal Request" id="wi">
			</form>

			<!-----------------------------note_div----------------------->
			

		</div>
		<!----------------------------------->
	</div>
	</main>

	</div>

</body>
</html>