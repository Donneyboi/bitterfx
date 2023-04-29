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

	
	<div class="container acoount">






		
		
			  <script type="text/javascript">
				$(document).ready(function () {
				$('.updatede').on('submit',function (para) {
				para.preventDefault();
				$.ajax({
				url:"processprofile.php",
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
                 	$('#f').val(null);

                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

					})
				});
				})
			</script>

		<form class="design updatede" action="processprofile.php" method="post">
			<span class="loadmyp">Update Detail</span>

			<label>Firstname</label>
			<input type="text" name="firstname" placeholder="Firstname" id="f">

			<label>Lastname</label>
			<input type="text" name="lastname" placeholder="Lastname" id="f">


			<label>E-mail</label>
			<input type="text" name="email" placeholder="E-mail" id="f">

			<label>Number</label>
			<input type="number" name="number" placeholder="Number" id="f">

			<label>Country</label>
			<input type="text" name="country" placeholder="Country" id="f">

			<label>State</label>
			<input type="text" name="state" placeholder="State" id="f">
			<input type="submit" value="update profile" id="upbt">
		</form>




























			  <script type="text/javascript">
				$(document).ready(function () {
				$('.upik').on('submit',function (para) {
				//para.preventDefault();
				$.ajax({
				url:"updatedpik.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                    $('.loadmypx').html('<div class="ajax"><img src="../img/loading.gif"></div>');
                     $('.loadmypx').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                 	$('.loadmypx').html(para2);
                 	$('#f').val(null);

                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

					})
				});
				})
			</script>

		<form class="design upik" action="updatedpik.php" method="post" enctype="multipart/form-data">
			<span class="loadmypx"></span>
		<img src="../profile/nopic.png">
		<input type="file" name="profile" id="im" style="display: none;">
		<label for="im" class="e">Edit</label>
		<input type="submit" value="update profile" id="upbt">
		</form>




		

	</div>
	</main>

	</div>

</body>
</html>