<?php include "db.php"; session_start(); ?>
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
	<link rel="stylesheet" type="text/css" href="css/widthdraw.css">
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
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
	<h3>deposite Request</h3>


	<div class="mytabel">
		<div class="row q">
		<span>Email</span>
		<span>Amount</span>
		<span>Status</span>
		<span>Time</span>
		<span>Action</span>
		
		 </div>
	   <hr>
		 <!------------------->
		 <?php $sql=mysqli_query($conn,"select * from deposit where 1");
         while ($arr=mysqli_fetch_array($sql)) {
               $email=$arr['email'];
               $amount=$arr['amount'];
               $status=$arr['status'];
               $id=$arr['id'];
               $time=$arr['time'];
        
		  ?>
		 <div class="row">
		<span><p>Email</p><?php  echo $email; ?></span>
		<span><p>Amount</p>$ <?php  echo number_format($amount); ?></span>
		<span><p>status</p><?php  echo $status; ?></span>
		<span><p>time</p><?php  echo $time; ?></span>
		<?php echo '<span><button type="button" onclick="upda('.$id.','.$email.')">confirme</button></span>'; ?>

		 </div>
		 <hr>
		<?php  } ?>



	</div>
	<div class="welcome"></div>
	<script type="text/javascript">
		function upda (e,a) {
		
				checklogin="id="+e+"&userid="+a;
					$.ajax({
				url:"confirmdeposit.php",
                 type:"GET",
                 data:checklogin,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                  //$('.welcome').hide();
                  //$('.dashboard').html('<div class="ajaxload" style="display:flex;"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){
                   //$('.welcome').hide();
                 	$('.welcome').show();
                 	$('.welcome').html(data);
                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

				})
		

		}

	</script>
</div>
</div>
</main>
</body>
</html>