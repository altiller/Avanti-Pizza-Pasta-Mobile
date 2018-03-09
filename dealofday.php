<?php

$weekday=date("w");
?>
<html  height="100%">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Avanti Pizza & Pasta</title>
	<link rel="stylesheet" href="themes/avanti.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div >
			
		</div>
		<div data-role="content" data-theme="a">
			<div  align="center"><img src="headermob.png" width="100%" border="0"></div >
			
			<br>
			<div align="center">
				<?php

					switch ($weekday){
										case 0: echo '<img src="../images/largewingsoda.jpg" class="dealofday">'; break;
			case 1: echo '<img src="../images/mondaytuesday.jpg" class="dealofday">'; break;
			case 2: echo '<img src="../images/mondaytuesday.jpg" class="dealofday">'; break;
			case 3: echo '<img src="../images/twopizza.jpg" class="dealofday">'; break;
			case 4: echo '<img src="../images/largewingsoda.jpg" class="dealofday">'; break;
			case 5: echo '<img src="../images/twopizza.jpg" class="dealofday">'; break;
			case 6: echo '<img src="../images/twopizza.jpg" class="dealofday">'; break;
									}
				?>
			</div>
			<br>
				
			<div>
			</div>
		
		<div>
			<a data-role="button" data-transition="slide" href="index.html">Home</a>
         </div>
		<div class="vysota">
			<footer data-role="footer" data-theme="a">

	<div align="center" style="font-color: white; font-size: 150%;">
	<a href="tel://561-469-7323">561-469-7323</a></div>
	<div align="center" style="font-size: 120%;">Dine-in   Delivery   Take-out</div>
	
	</footer>
	</div>
	
	</div>
</body>
</html>