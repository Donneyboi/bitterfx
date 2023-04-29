<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/about.css">
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


<main class="about">
	<div class="about_image">
		<div class="about_tp">
			<h1>Who we are</h1>
		</div>
	</div>
	<!----------------------------->
<section class="about_div_div">

<img src="img/5320825e79b92e6b9a3af914943ff4c9_w200.gif">
	<div class="small_about_ss">
		<p>A leading investor and trusted partner for alternative assets. We create sustainable value for our clients and society.

We are one of BittrexFx asset managers for alternative equity investments and are part of BittrexFx. We focus on investing into private equity, infrastructure and renewable energy. We are located in Munich, London, Luxembourg, New York and Singapore.

Due to their long investment horizon and attractive risk/return profile, our alternative investments are an ideal match for the requirements of BittrexFx.

ACP key figures (3Q2020):</p>
<img src="img/240_F_298768431_c9ws2AXS1fnrLWIifWv01oAFhF3aWiQz.jpg">

<p>Investment management is an integral part of the insurance business, as the premiums of BittrexFx clients are invested to meet long-term liabilities. IQPro Investment’s worldwide investment activities comprise assets of over EUR 750 billion across a range of asset classes, sectors and countries. As a result, BittrexFxis directly and indirectly connected with other businesses, sectors and economies, and is therefore an integral part of the global economy.<br>

ACP as BittrexFx captive investment manager for alternative assets strives to invest sustainably across our three asset classes. In order to keep up with our ambition, we incorporate Environmental, Social and Governance (ESG) factors into our investment processes, for example through our exclusion policy, research, corporate and country analysis, monitoring and risk management. We firmly believe that considering ESG factors in investment management is not a short-term trend, but will change the business.<br>


ACP is committed to the United Nations Principles for Responsible Investment (UN PRI). Our parent company, BittrexFx, is a signatory to the UN PRI, and so in addition to integrating ESG principles in our investment process, we also incorporate these into our ownership policies and practices and aim for appropriate disclosure on ESG issues by the entities in which we invest. Moreover, we strive to enhance the implementation effectiveness of the principles and regularly report on our activities and progress of implementation. Our commitment covers all assets we invest in.</p>
	</div>
</section>
	<!--------------------------til---------------->
	<h1 class="about_tille">We are TradeNow<p>An award-winning global company offering leading currency solutions for both retail and corporate clients. </p></h1>
	<div class="about_con">
		<div class="about_talk">
			<h3>At TradNow</h3>
			<p> we aim to provide you with the best trading conditions, powered by both industry-leading and cutting edge innovative platforms. Our R&D efforts constantly push the boundaries of liquidity and usability to empower you to benefit from a truly exceptional trading environment.</p>

		</div>
		<img src="img/2023_01_01_13_40_IMG_0172.png">
	</div>





	
</main>


</body>
</html>