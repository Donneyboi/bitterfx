<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feature</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
</head>
<body>
<!-------------------head------------------>
<script type="text/javascript">
			head="id=head";
					$.ajax({
				url:"head.php",
                 type:"GET",
                 data:head,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                  //$('.welcome').html('<div class="ajaxload"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){

                 	$('.welcome').show();
                 	$('.welcome').html(data);
                 },
                 error:function(){
                 	//alert('error typing to processData');
                 }

					})
		
		

	</script>
	<div class="welcome"></div>
<h1 class="t">Contact For Any Query</h1>
		<div class="contact_div">
			<form class="contact_form">
				<input type="text" name="firstanme" placeholder="Firstname">
				<input type="text" name="firstanme" placeholder="Lastname">
				<input type="text" name="firstanme" placeholder="Email">
				<input type="text" name="firstanme" placeholder="state">
				<textarea placeholder="Message"></textarea>
				<input type="submit" name="" id="btn">
			</form>
		</div>
	


<main >

</main>


</body>
</html>