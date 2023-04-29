<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="signup_div">
		<img src="img/images.png">
		<div class="signup_div_tp">

			<img src="img/2022_12_29_15_10_IMG_0110.webp">
 
				<script type="text/javascript">
				$(document).ready(function () {
				$('#login').on('submit',function (para) {
					para.preventDefault();
					$.ajax({
				url:"process_login.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                    $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                     $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                 	$('.loadmyp').html(para2);
                 },
                 error:function(){
                 	//alert('error typing to processData');
                 }

					})
				});
				})
			</script>
		<form class="signup_form" action="process_login.php" method="post" id="login">
			<h2>Sign In</h2>
			<div class="loadmyp"></div>
			
<input type="email" name="email" placeholder="Email">
	<input type="text" name="password" placeholder="Password">		
			<input type="submit" id="sibtn" required name="x">
			<a href="forget.php" class="f">Forget password</a>

			<p>Dont  have an account <a href="signup.php">Sign Up</a></p>
		</form>	
		</div>
	</div>

</body>
</html>