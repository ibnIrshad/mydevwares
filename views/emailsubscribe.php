<?php require_once('../controllers/constants.php'); ?>
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
				<li class="navitem" id="marketplaceBTN" style="background-image: url(file:///C|/xampp/htdocs/models/UI/global_imgs/nav.active_btn.gif);background-repeat: no-repeat;">
					<a href="index.php" title="myDevWaresHome - Marketplace">
					Marketplace
					</a>
				</li>
				<li class="navitem" id="howitworksBTN">
					<a href="howitworks.php" title="myDevWaresHome - Marketplace">
					How It Works
					</a>
				</li>
				<li class="navitem" id="makemoneyBTN">
					<a href="advantages.php" title="myDevWaresHome - Marketplace">
					Advantages of mDW
					</a>
				</li>
				<li class="navitem" id="registerBTN" style="background-image: url(../../models/UI/global_imgs/nav.active_btn.gif);background-repeat: no-repeat;">
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
			<h2>Thanks! You have been added to our list to be notified of the myDevWares
				launch.</h2>
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
			<?php
	  
	  $success = false;
	  
	  if (!isset($_POST['email'])){
		  echo "<h1>Sorry, you did not specify an email address.</h1>";
		  echo "Please go back and try again.";
	  }
	  
	  $ip = $_SERVER['REMOTE_ADDR']; 
	  
	  $_POST['email'] = stripslashes($_POST['email']);
	  
	  echo "<div class=\"content_bg\">Your email: ".$_POST['email']."</div";
	  
	  if (eregi ('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $_POST['email'])) {
			$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
			$db = mysql_select_db("isahasse_mydevwares");
			
			if (!$con || !db && !isset($fail))
				$fail = "Could not make connection.";
			
			$q1 = mysql_query("SELECT * FROM emailist WHERE addr = '$_POST[email]'");
			
			if (!q1 && !isset($fail))
			$fail = "Could not retrieve entries.";
			
			if (mysql_num_rows($q1) == 0 && !isset($fail)) {
				$i = mysql_query("INSERT INTO emailist (addr, ip) VALUES('$_POST[email]', '$ip')");
				if (!$i) $fail = "Could not insert rows.";
				else $success = true;
			}
			else $success = true;
			
		}
		else $fail = "That's not an email address!";
		
			 if ($success == true){
			?>
			<h1>Success.</h1>
			<div class="content_bg">
				<p> You have been added to our mailing list. We will only send you ONE email
					at the myDevWares launch. You may unsubscribe at any time by putting your
					email in the subject line and sending it via our contact page. </p>
			</div>
			<?php }
	  else {
	?>
			<h2>Whoopsie Daisy! Error. :(</h2>
			<div class="content_bg">
				<p>Sorry, I could not add your email because of this error: <?php echo $fail; ?></p>
				<p><strong>Please try again.</strong></p>
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
				<?php
	  }
	?>
			</div>
		</div>
	</div>
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="sidebar" -->
	<div class="grid_5">
		<h1>Hope to get in touch!</h1>
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