<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feature</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/team.css">
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


<main >
<h3 class="subtiittle">OUR TEAM</h3>
<h1 class="til">Our Best Team Leader</h1>
<div class="team">
	<div class="small_team_div">
		<div class="team_image"></div>
		<h3>dominic mathew</h3>
		<div class="link">
			<a href="" class="fab fa-facebook"></a>
			<a href="" class="fab fa-whatsapp"></a>
			<a href="" class="fab fa-instagram"></a>
		</div>

	</div>



		<div class="small_team_div">
		<div class="team_image" style="background-image: url('img/team-1.jpg');"></div>
		<h3>Ruth james</h3>
		<div class="link">
			<a href="" class="fab fa-facebook"></a>
			<a href="" class="fab fa-whatsapp"></a>
			<a href="" class="fab fa-instagram"></a>
		</div>

	</div>


		<div class="small_team_div">
		<div class="team_image" style="background-image: url('img/team-4.jpg');"></div>
		<h3>john friday </h3>
		<div class="link">
			<a href="" class="fab fa-facebook"></a>
			<a href="" class="fab fa-whatsapp"></a>
			<a href="" class="fab fa-instagram"></a>
		</div>

	</div>



		<div class="small_team_div">
		<div class="team_image" style="background-image: url('img/team-3.jpg');" ></div>
		<h3>Annette varuma</h3>
		<div class="link">
			<a href="" class="fab fa-facebook"></a>
			<a href="" class="fab fa-whatsapp"></a>
			<a href="" class="fab fa-instagram"></a>
		</div>

	</div>



</div>
</main>


</body>
</html>