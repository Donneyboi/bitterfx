	<?php  include "db.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BittrexFx</title>
	<link rel="stylesheet" type="text/css" href="../css/head.css">
</head>
<header>
<div class="logo">
		<img src="../../img/download.jfif">
		<h1>BittrexFx</h1>
	</div>




	<!------------------------------------user detaile-------------------------------->
	<script type="text/javascript">
	$(document).ready(function() {
	

		
		
			checklogin="id=check";
					$.ajax({
				url:"fetchprofile.php",
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
                   $('#pic').attr("src","../profile/"+data);
                 
                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

				})
		
	})

	</script>
	<div class="head_detail">
		<img id="pic">
		<?php 
$sql=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
$arr=mysqli_fetch_array($sql);
$firstname=$arr['firstname'];
$lastname=$arr['lastname'];

 ?>
		<h3><?php echo $firstname." ".$lastname; ?> </h3>
	</div>
	<div class="userbar" onclick="document.getElementsByClassName('side_div')[0].style.display='block'"><i class="fa fa-bars"></i></div>
</header>
</html>
