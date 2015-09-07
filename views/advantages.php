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
				<li class="navitem" id="howitworksBTN">
					<a href="howitworks.php" title="myDevWaresHome - Marketplace">
					How It Works
					</a>
				</li>
				<li class="navitem" id="makemoneyBTN" style="background-image: url(../../models/UI/global_imgs/nav.active_btn.gif);background-repeat: no-repeat;">
					<a href="advantages.php" title="myDevWaresHome - Marketplace">
					Advantages of mDW
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
			<img src="../models/UI/global_imgs/typo-here-to-make-the-internet.png" width="960" height="133" alt="We're here to make the internet a better place." style="padding-top:10px;" />
			<!-- InstanceEndEditable -->
			<div id="searchform">
				<form id="form1" name="form1" method="post" action="">
					<input name="search" type="text" id="search" accesskey="s" value="search..." onfocus="if(this.value == 'search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search...';}"/>
				</form>
			</div>
		</div>
	</div>
	<!-- InstanceBeginEditable name="main" -->
	<div class="grid_16">
		<div id="maincontent">
	<h1>Advantages of myDevWares</h1>
	<p>There are many advantages of using myDevWares compared to other online
		marketplaces. Here are some of those listed, in no particular order.</p>
<div class="content_bg">
	<h1>For Buyers</h1>
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/lockstart_session.png" width="128" height="128" alt="Convenient, quick and easy" />
		<h2>Convenient, quick, and easy - and 100% safe</h2>
		<p>In a matter of a few clicks you can start downloading any item at your
			will! Enjoy the fluid, well-thought out interface, which requires no help
			to use. Best of all, you never have to worry about shady sellers or buyers,
			as every item is verified by myDevWares staff prior to posting. You, as
			a buyer have the confidence of knowing that your item is available for download
			immediately, and the seller is confident that he recieves full payment on
			his item. </p>
	</div>
	<hr />
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/ksmiletris.png" width="128" height="128" alt="Low prices" />
		<h2>Low prices</h2>
		<p>myDevWares items' prices are chosen by sellers, who use a variety of methods
			of sale, including auctions and low-priced multi-sales to give you the most
			value for your money. Sellers pay very small commissions, passing on the
			savings to you!</p>
	</div>
	<hr />
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/Download Folder.png" width="128" height="128" alt="freebie downlads" />
		<h2>Freebies!</h2>
		<p>Sometimes the best things in life are free. This is especially true for
			web development resources. Browse a large range of user-generated high quality
			freebies, such as icon sets, wordpress themes, or scripts.</p>
		<p>As a freebie author, you get the advantage of an SEO friendly link to
			your site, recognized portfolio, and useful reputation if you create and
			post freebies on myDevWares.</p>
	</div>
</div>
<div class="content_bg">
	<h1>Advantages For Sellers</h1>
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/clean.png" width="128" height="128" alt="no sneaky fees" />
		<h2>No sneaky fees, minimum withdrawals, fixed deposits or deposit locks</h2>
		<p>myDevWares has a very <strong>reasonable minimum deposit</strong> of $2
			US, which can be <strong>withdrawn at any time</strong>. Your <strong>money
				never expires</strong>, and you are <strong>never forced to deposit money
					in fixed amounts</strong>. You are permitted to <strong>withdraw your earnings
						at anytime, no matter how big or small.</strong></p>
		<p>Other marketplaces force you to add money in fixed amounts, so, for example,
			you end up paying $20 for an $8 item. They also force you to make unfair
			minimum deposits while at the same time refusing to allow you to withdraw
			the balance. Even as a person who earns money by selling items on their
			sites, you are forced to wait until your earnings have reached amounts of
			up to $50 before you can withdraw - and that also is only processed on certain
			days of the month. To top it all off, your money <em>expires</em> after
			a certain period of time!</p>
		<p><strong>Not any more.</strong></p>
		<p>&nbsp;</p>
	</div>
	<hr />
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/Money_Bag_128.png" width="128" height="128" alt="Money!" />
		<h2>Lowest commissions ever!</h2>
		<p> myDevWares charges the lowest commisions on the net (only 9% per sale)
			compared to other marketplaces which charge prices ranging 30% per sale
			to 60%.</p>
	</div>
	<hr />
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/edit-128.png" width="128" height="128" alt="edit" />
		<h2>Freedom of choice! Price, unique or non-unique, and terms of sale are
			all up to you</h2>
		<p>It's your item. You should have the right to sell it the way you like.</p>
		<p>At myDevWares, you as a seller, can choose any price that suits you. You
			may also sell your item once <em>(unique item, such as a high quality template)</em> or
			many times <em>(non-unique, such as icons)</em>. Unique items are automatically
			sold in auctions to the highest bidder, and non-unique items are sold at
			a fixed price many times- thus letting you make the most money off your
			products!</p>
	</div>
	<hr />
	<div class="advantage_item">
		<img src="../models/UI/global_imgs/background.png" width="128" height="128" alt="embeddable sales" />
		<h2>Embeddable sales - use myDevWares as a host for your resources</h2>
		<p>Last but not least, myDevWares offers a unique option for sellers/distributors
			- host your item on myDevWares servers and post embeddable links (for sale,
			or for free) on your blog, website, or anywhere on the internet. Therefore
			you can maximize your sales, and minimize costs when distributing freebies,
			while at the same time getting recognized as a designer/coder by a large
			audience.</p>
	</div>
</div>
<h1>What are you waiting for? Get started.</h1>
			<p>&nbsp;</p>
		</div>
	</div>
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="sidebar" -->
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