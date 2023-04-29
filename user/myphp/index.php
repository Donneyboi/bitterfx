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
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<script type="text/javascript" src="../java/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../java/sweetalert-dev.js"></script>
</head>
<body>
	<?php include "head.php"  ?>
	<main>
	<div class="div_body">
	<?php include "side.php";  ?>

	
	<div class="container">

		<div class="moneydiv">
			<div class="where_m">
				<p>Welcome 👋, <?php  $sqlx=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
				$arrll=mysqli_fetch_array($sqlx);
				 $firstname=$arrll['firstname'];
				 	 $lastname=$arrll['lastname'];
				   echo  $firstname." ".$lastname;?> !</p>
				<span>Available Balance</span>
				<div class="count_div">
					<h3>$<?php  $sql=mysqli_query($conn,"select * from deposit where status='confirm'  and email='".$_SESSION['user']."'");
				$arrl=mysqli_fetch_array($sql);
				$arrln=mysqli_num_rows($sql);

				if ($arrln<1) {
					echo "0.0";
				}
				else{
$sql=mysqli_query($conn,"select * from deposit where status='confirm'  and email='".$_SESSION['user']."'");
				      $amount=$arrl['amount'];
				   echo number_format($amount);
				   }
			     ?></h3>
					<div class="linkinf">
						<a href="withdraw.php">Withdarw</a>
						<a href="addmoney.php">Deposit</a>
					</div>
				</div>
				<h4><?php  $sql=mysqli_query($conn,"select * from deposit where status='confirm'  and email='".$_SESSION['user']."'");
				$arrl=mysqli_fetch_array($sql);
				$arrln=mysqli_num_rows($sql);

				if ($arrln<1) {
					echo "0.0";
				}
				else{
$sql=mysqli_query($conn,"select * from deposit where status='confirm'  and email='".$_SESSION['user']."'");
				      $amount=$arrl['amount'];
				   echo number_format($amount);
				   }
			     ?> BTC</h4>
			</div>
			<img src="../img/61e5ab03fc28567671dd0b4c_Stopwatch.gif" id="this">
		</div>
		<h4></h4>
		<div class="balance_holder_div">
			<!------------Earning--------------->
	
			<div class="small_div">
		<label class="fa fa-wallet"></label>
				<p>Total Profit</p>
				<h4>$ 
				<?php $sql_invermentx=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."'");
				$in=mysqli_fetch_array($sql_invermentx);
				echo  number_format($invermentxx=$in['earning']);

				 ?></h4>
				
				
			</div>
			<!------------Earning--------------->
			<div class="small_div">

	    <label class="fa fa-coins"></label>
				<p>Referral bonues</p>
				<h4>$ 
				 </h4>
			</div>
			<!------------Earning--------------->
			<div class="small_div">
				<label class="fa fa-coins"></label>
				<p>Total Deposit</p>
				<h4>$<?php  $tol=mysqli_query($conn,"select sum(amount) as total from deposit where email='".$_SESSION['user']."'");
				      $trr=mysqli_fetch_array($tol);
				     echo $tm=$trr['total'];
				 ?></h4>
			</div>
			<!------------Earning--------------->
		
		
			<!---------------refferal div----->
			<div class="refferal_div ">
				<label>Invite friends to earn</label>
				<p>Earn more commissions by inviting your friends to fund.</p>
				<input type="" name="" placeholder="for nothing">
				<input type="button" value="Copy" style="background-color: blue; color: white; display: flex; align-items: center; justify-content: center; border: none;">

			</div>
		</div>


	<div class="refferal_div nyr">
				<label>Invite friends to earn</label>
				<p>Earn more commissions by inviting your friends to fund.</p>
				<input type="" name="" placeholder="for nothing">
				<input type="button" value="Copy" style="background-color: blue; color: white; display: flex; align-items: center; justify-content: center; border: none;">

			</div>



		<div class="tradingview-widget-container " style="width: 100%; height: 250px; margin-top: 20px;">
  <div style="height: 250px;" class="rounded-md" id="tradingview_da309"><div id="tradingview_5b9a7-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 100%;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;"><div style="width: 100%;height: 100%;background: transparent;padding: 0 !important;"><iframe id="tradingview_5b9a7" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_5b9a7&amp;symbol=COINBASE%3ABTCUSD&amp;interval=1&amp;saveimage=0&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=dark&amp;style=2&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=www.iq0pti0ns.com&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD#%7B%22page-uri%22%3A%22www.iq0pti0ns.com%2Fuser%2Findex.php%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "COINBASE:BTCUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "2",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "save_image": false,

  "container_id": "tradingview_da309"
}
  );
  </script>
</div>






<div class="card px-2 pb-4 sm:px-3">
              <div class="my-3 flex h-8 items-center justify-between">
           
               
              </div>



               <div class="py-1 px-1">
               


<div class="tradingview-widget-container" style="width: 100%; height: 400px;">
  <iframe scrolling="yes" allowtransparency="false" frameborder="" src="https://s.tradingview.com/embed-widget/timeline/?locale=en#%7B%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22500%22%2C%22utm_source%22%3A%22sdb-53.hosting.stackcp.net%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22timeline%22%7D" style="box-sizing: border-box; height: 400px; width: 100%; border-radius: 5px; color: red;"></iframe>
  
  
<style>
  .tradingview-widget-copyright {
    font-size: 13px !important;
    line-height: 32px !important;
    text-align: center !important;
    vertical-align: middle !important;
    /* @mixin sf-pro-display-font; */
    font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright .blue-text {
    color: #2962FF !important;
  }

  .tradingview-widget-copyright a {
    text-decoration: none !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:visited {
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:hover .blue-text {
    color: #1E53E5 !important;
  }

  .tradingview-widget-copyright a:active .blue-text {
    color: #1848CC !important;
  }

  .tradingview-widget-copyright a:visited .blue-text {
    color: #2962FF !important;
  }
  </style></div>




              </div>
            
            </div>







	</div>
	</main>

	</div>

</body>
</html>