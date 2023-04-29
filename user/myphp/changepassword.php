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
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<script type="text/javascript" src="../java/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../java/sweetalert-dev.js"></script>
</head>
<body>
	<?php include "head.php"  ?>
	<main>
	<div class="div_body">
	<?php include "side.php";  ?>

	
	<div class="container acoount ">
		<script type="text/javascript">
				$(document).ready(function () {
				$('.jj').on('submit',function (para) {
					para.preventDefault();
					$.ajax({
				url:"propassword.php",
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

		<form class="design pass jj" action="propassword.php" method="post">
			<div class="loadmyp"></div>
			<span>Update Password</span>

			<label>OLd password</label>
			<input type="" name="oldp" placeholder="Old Password">

			<label>New Password</label>
			<input type="" name="new" placeholder="New Password">


			<input type="submit" value="update password" id="upbt">
		</form>
<form class="design">
		<img src="../profile/nopic.png">
		<input type="file" name="" id="im" style="display: none;">
		<label for="im" class="e">Edit</label>
		<input type="submit" value="update profile" id="upbt">
		</form>




	




		

	</div>
	</main>

	</div>

</body>
</html>