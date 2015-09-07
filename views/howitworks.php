<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>myDevWares - Home - Buy and sell PSD or XHTML templates, wordpress themes,
icons, scripts and whole lot of other web development resources.</title>
<!-- InstanceEndEditable -->
<link href="css/960.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="../controllers/js/pngfix.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
<script src="../models/UI/js/tooltip.js" type="text/javascript"></script>
<link href="../models/UI/theme/ui.all.css" type="text/css" rel="stylesheet" />
<script src="../models/UI/js/ui.core.min.js" type="text/javascript"></script>
<script src="../models/UI/js/ui.dialog.min.js" type="text/javascript"></script>
<script src="../models/UI/js/effects.core.min.js" type="text/javascript"></script>
<script src="../models/UI/js/effects.scale.min.js" type="text/javascript"></script>
<script src="../models/UI/js/cufon.js" type="text/javascript"></script>
<script src="../models/UI/fonts/Frutiger_LT_Std_300.font.js" type="text/javascript"></script>
<script>
function verifModal(){
   $("#dialog").dialog("open");
   return false;
}

$(document).ready(function() {
   $("#dialog").dialog({autoOpen:false, show:'scale', hide:'scale', modal:true}); 
   <?php
$hourLater = mktime(time()+60*60*1*1);

if (!isset($_COOKIE['visited'])) {
	echo 'setTimeout("verifModal()",3000);';
}	
?>
});

Cufon.replace('h1')('h2')('blockquote');
</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div class="container_16" id="wrapper">
	<div class="grid_16" id="top">
		<a href="http://www.mydevwares.com/" title="myDevWares Home">
		<img src="../models/UI/global_imgs/Blank.gif" width="300px" height="90px" style="filter:alpha(opacity=0);-moz-opacity:0;opacity:0;" />
		</a>
		<!-- InstanceBeginEditable name="nav" -->
		<div id="navwrap">
			<ul id="nav">
				<li class="navitem" id="marketplaceBTN">
					<a href="index.php" title="myDevWaresHome - Marketplace">
					Marketplace
					</a>
				</li>
				<li class="navitem" id="howitworksBTN" style="background-image: url(../../models/UI/global_imgs/nav.active_btn.gif);background-repeat: no-repeat;">
					<a href="howitworks.php" title="myDevWaresHome - Marketplace">
					How It Works
					</a>
				</li>
				<li class="navitem" id="makemoneyBTN">
					<a href="advantages.php" title="myDevWaresHome - Marketplace">
					Avantages of mDW
					</a>
				</li>
				<li class="navitem" id="registerBTN">
					<a href="contact.php" title="myDevWaresHome - Marketplace">
					Contact
					</a>
				</li>
			</ul>
		</div>
		<!-- InstanceEndEditable -->
	</div>
	<div class="grid_16">
		<div id="blue_splash">
			<!-- InstanceBeginEditable name="bluesplash" -->
			<img src="../models/UI/global_imgs/typo-lets-do-this.png" width="960" height="133" alt="Let's do this!" />
			<!-- InstanceEndEditable -->
			<div id="searchform">
				<form id="form1" name="form1" method="post" action="">
					<input name="search" type="text" id="search" accesskey="s" value="search..." onfocus="if(this.value == 'search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search...';}"/>
				</form>
			</div>
		</div>
	</div>
	<!-- InstanceBeginEditable name="main" -->
	<div class="grid_11">
		<div id="maincontent">
			<h1>How does myDevWares work?</h1>
			<p>The myDevWares web application was built on the LAMP server platform, and
				Windows Vista Home Premium development platform. </p>
			<div class="content_bg">
				<h2>How myDevWares works for sellers:</h2>
				<ol start="1" type="1">
					<li>You <em>upload  a web development item</em> onto the marketplace (such
						as a template, script or icon set). Choose your price, terms, etc..</li>
					<li>Once the item is <em>approved and verified</em> by staff, it is listed
						on the myDevWares marketplace</li>
					<li>A buyer sees the item, likes it, and <em>buys the item</em> using PayPal
						or a Credit Card</li>
					<li>You make 91% in<em> cold, hard, cash</em> on every sale! (myDevWares
						takes a tiny commision of 9% - see comparison)</li>
				</ol>
			</div>
			<div class="content_bg">
				<h2>How myDevWares works for buyers:</h2>
				<ol start="1" type="1">
					<li>You <em>browse the marketplace</em> looking for some nice, juicy web
						develoment resources for your project with a too-short-deadline that is
						coming up.</li>
					<li>&quot;<em>Add money</em>&quot; to your account using PayPal or CC with
						a few clicks</li>
					<li>You see an item that you need or like - click a button to buy - and <em>download
							away</em>!</li>
				</ol>
				<h2>Hmmm, so what can I do on myDevWares?</h2>
				<p>You can make money by selling your web development resources, and/or keep
					spicing up your projects easily and quickly by downloading a large database
					of user-generated high-quality freebies and premium content. This is the
					place to go to download and/or purchase web development resources, as well
					as a place to sell yours.</p>
			</div>
		</div>
	</div>
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="sidebar" -->
	<div class="grid_5">
		<h1>myDevWares is currently in development</h1>
		<p><strong>Can't wait to start using myDevWares?</strong></p>
		<p>We are currently working on the web application, user interface, and payment
			processing. We plan to finish by early June of this year, but who knows, at
			the current rate, we may even finish by mid-May!</p>
		<p>Anyways, if you don't want to miss out the myDevWares launch <em>(hint:
				includes competitions and yummy freebies)</em>, why not tell us your email
				so we can let you know as soon as myDevWares is ready?</p>
		<p><strong>We hate spam, and we will not misuse your email. Simply enter your
				email address below to be notified of the myDevWares launch.</strong></p>
		<form id="emailsub" name="emailsub" method="post" action="emailsubscribe.php">
			<label>E-mail:
				<input name="email" type="text" id="email" value="you@yourdomain.com" onfocus="if(this.value == 'you@yourdomain.com') {this.value = '';}" onblur="if (this.value == '') {this.value = 'you@yourdomain.com';}" />
			</label>
			<label>
				<input type="submit" name="submit" id="submit" value="Submit" />
			</label>
			<br />
			<img src="../models/UI/global_imgs/mail_forward-128.png" width="128" height="128" alt="email" />
		</form>
		<p>&nbsp;</p>
	</div>
	<!-- InstanceEndEditable -->
</div>
<div class="clear">
</div>
<div id="footer">
	<div class="footer_col">
		<h1>Recent Items</h1>
		<p>Nothing here yet :(</p>
	</div>
	<!-- InstanceBeginEditable name="footer_side" -->
	<div class="grid_5">
		<h1>Blog Posts</h1>
		<p>No blog posts yet :( </p>
	</div>
	<!-- InstanceEndEditable -->
	<div class="clear">
	</div>
	<p style="text-align:center; font-size:9px;">Copyright © Isa Hassen. Some rights
		reserved. </p>
</div>
<!-- InstanceBeginEditable name="dialog" -->
<div id="dialog" title="myDevWares is still under construction!">
	<h1>myDevWares is Under Conststruction</h1>
	<p><strong>Can't wait to start using myDevWares?</strong></p>
	<p>If you don't want to miss out the myDevWares launch <em>(hint: includes competitions
			and yummy freebies)</em>, why not tell us your email so we can let you know
			as soon as myDevWares is ready?</p>
	<form id="emailsub2" name="emailsub" method="post" action="emailsubscribe.php">
		<label>E-mail:
			<input name="email2" type="text" id="email2" value="you@yourdomain.com" onfocus="if(this.value == 'you@yourdomain.com') {this.value = '';}" onblur="if (this.value == '') {this.value = 'you@yourdomain.com';}" />
		</label>
		<label>
			<input type="submit" name="submit2" id="submit2" value="Submit" />
		</label>
		<br />
		<img src="../models/UI/global_imgs/mail_forward-128.png" width="128" height="128" alt="email" />
	</form>
</div>
<!-- InstanceEndEditable -->
<script type="text/javascript">Cufon.now();</script>
<script src="http://static.getclicky.com/84674.js" type="text/javascript"></script>
</body>
<!-- InstanceEnd --></html>