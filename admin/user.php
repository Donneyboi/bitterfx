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
	<h3>Tradenow user</h3>


	<div class="mytabel">
		<div class="row q">
		<span>Firstname</span>
		<span>Lastname</span>
		<span>E-mail</span>
		<span>country</span>
		<span>Number</span>
		 </div>
	<hr>
		 <?php $sql=mysqli_query($conn,"select * from signup where 1");
         while ($arr=mysqli_fetch_array($sql)) {
               $firstname=$arr['firstname'];
               $lastname=$arr['lastname'];
               $email=$arr['email'];
               $country=$arr['country'];
               $num=$arr['number'];
        
		  ?>
		 <div class="row">
		<span><p>firstname:</p><?php  echo $firstname; ?></span>
		<span><p>lastname:</p> <?php  echo $lastname  ?></span>
		<span><p>email:</p><?php  echo  $email; ?></span>
		<span><p>country:</p><?php  echo $country; ?></span>
		<span><p>time:</p><?php  echo $num; ?></span>
		 </div>
		 <hr>
		<?php  } ?>




	</div>
</div>
</div>
</main>
</body>
</html>