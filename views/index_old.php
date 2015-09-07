<?php

include('../models/data.php'); 
$data = new data; //load class

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>myDevWares - Home - Buy and sell PSD or XHTML templates, wordpress themes, icons, scripts and whole lot of other web development resources.</title>

<link href="../views/css/960.css" rel="stylesheet" type="text/css" />
<link href="../views/css/text.css" rel="stylesheet" type="text/css" />
<link href="../views/css/reset.css" rel="stylesheet" type="text/css" />
<link href="../views/css/style.css" rel="stylesheet" type="text/css" />
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
<script>
$(document).ready(function() {
   $("#dialog").dialog({autoOpen:false, show:'scale', hide:'scale'});   
});

function verifModal(){
   $("#dialog").dialog("open");
   return false;
}
</script>
</head>
<body>
<div class="container_16" id="wrapper">
  <div class="grid_16" id="top">
    <div id="navwrap">
      <ul id="nav">
        <a href="index.php"><li class="navitem" id="marketplaceBTN"> Marketplace </li></a>
        <li class="navitem" id="howitworksBTN"> How It Works </li>
        <li class="navitem" id="makemoneyBTN"> Make Money </li>
        <li class="navitem" id="registerBTN"> Register(free!) </li>
      </ul>
    </div>
  </div>
  <div class="grid_16">
    <div id="blue_splash"> </div>
  </div>
  <div class="grid_16">
  <div id="grey_splash">
    fg </div>
  </div>
  <div class="grid_11">
    <div id="maincontent">
      <h2>Welcome</h2>
    </div>
  </div>
  <div class="grid_5">dfsf </div>
</div>
<div id="dialog" title="Ima cool guy">hi</div>
</body>
</html>