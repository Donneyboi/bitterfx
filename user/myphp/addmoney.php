<?php session_start(); include "db.php";
if(!isset($_SESSION['user'])){
    header("Location:../../index.html");
}?><!DOCTYPE html>
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
		<script type="text/javascript" src="../java/java.js"></script>
</head>
<body>
	<?php include "head.php"  ?>
	<main>
	<div class="div_body">
	<?php include "side.php";  ?>

	
	<div class="container">
		<!-------------------------------------------->
		<div class="withdraw_div">
			<h2 class="tittless">Deposite Funds</h2>
			<hr style="width: 90%;margin-left: 30px;">


		
		<div class="loadmyp">
			
		</div>
		
			  <script type="text/javascript">
				$(document).ready(function () {
				$('.withdraw_form').on('submit',function (para) {
					para.preventDefault();
					$.ajax({
				url:"prosses_addmoney.php",
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
			<form class="withdraw_form" action="prosses_addmoney.php" method="post" id="withderw">
				<input type="text" name="amount" placeholder="Enter Amount">
				<?php $sql_inverment=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
				$in=mysqli_fetch_array($sql_inverment);
				$inverment=$in['investment'];

				 ?>
				
			    <select onchange="choosecoin(this)">
			    	                <option value="Bitcoin">Bitcoin (BTC)</option>
                                    <option value="Ethereum">Ethereum (ETH)</option>
                                    <option value="Bitcoin Cash">Bitcoin Cash (BCH)</option>
                                    <option value="Dogecoin">Dogecoin</option>
                                    <option value="Tron">Tron</option>
                                    <option value="Litcoin">Litcoin (LTC)</option>
			    </select>

			    <div class="detail_copy">
			    	<p>Scan The Barcode to make deposit or copy the wallet address below</p>
			    	 <img src="https://api.qrserver.com/v1/create-qr-code/?data=bc1qwmyqdxq7f9gxkaf8m297xuyf0jm47x22mvau8c&amp;size=200x200" alt="Wallet Barcode" title="Wallet Barcode"/ id="barcode">
                      
			    	<p class="address">bc1qwmyqdxq7f9gxkaf8m297xuyf0jm47x22mvau8c</p>
			    </div>
			    <label class="prof">Uplood Proof of Payment</label>
			    <input type="file" name="">
			 
			    <input type="submit" name="k" value="Deposite Request" id="wi">
			</form>

		
  			</div>
		<!----------------------------------->
	</div>
	</main>
<script type="text/javascript">
	function choosecoin(select) {
		//var xx=select.value;
		//alert(xx);
		if (select.value=="Bitcoin") {
         $('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=bc1qwmyqdxq7f9gxkaf8m297xuyf0jm47x22mvau8c&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("bc1qwmyqdxq7f9gxkaf8m297xuyf0jm47x22mvau8c");

		}
		else if (select.value=="Ethereum") {
		$('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=0xD9D3DE3003dfF4ed7aD56Bb9bE89335db50A1B53&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("0xD9D3DE3003dfF4ed7aD56Bb9bE89335db50A1B53");
		}

		else if (select.value=="Bitcoin Cash") {
	$('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=qznumvvs6es0y3gpq40htvwz4entvul40vvj6af8l6&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("qznumvvs6es0y3gpq40htvwz4entvul40vvj6af8l6");
		}
		else if (select.value=="Dogecoin") {
	$('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=DQh98KpYdL5JJTMUuzZictnLGpCjr2KozN&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("DQh98KpYdL5JJTMUuzZictnLGpCjr2KozN");
		}
		else if (select.value=="Tron") {
			$('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=TQPQLuifEozvxV1rHYr3sS76UBntVJsTKN&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("TQPQLuifEozvxV1rHYr3sS76UBntVJsTKN");
		}
		else{
			$('#barcode').attr("src","https://api.qrserver.com/v1/create-qr-code/?data=ltc1qzd7dvp4dm4kcesqpa3huky3ls9p9r6d5hue2lv&amp;size=200x200' alt='Wallet Barcode' title='Wallet Barcode'/ id='barcode'");
           $('.address').html("ltc1qzd7dvp4dm4kcesqpa3huky3ls9p9r6d5hue2lv");	
		}

	}
</script>
	</div>

</body>
</html>