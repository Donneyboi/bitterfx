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
<?php
if (isset($_POST['reg'])) {
 $useramout=mysqli_escape_string($conn,$_POST['profituser']);
 $userid=$_POST['usertoid'];
if ($useramout=="") {
	echo "two";
}
else{
	//$select=mysqli_query($conn,"select * from signup where id='$userid'");
	$update=mysqli_query($conn,"update  signup set earning=earning+$useramout where id='$userid'");
}
}

  ?>
<div class="container">
	<form class="myform" method="post" >
		<input type="" name="usertoid" value="<?php echo $_GET['fff'] ?>">
		<input type="number" name="profituser" placeholder="Profit">
		<input type="submit" name="reg" value="profit">
	</form>
</div>
</main>
</body>
</html>