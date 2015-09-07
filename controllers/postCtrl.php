<?php
/*******************************************************
Functions.php
This file holds all the classes with functions that are needed to perform
common actions within the myDevWares application.
*******************************************************/

require_once ('main.php'); 

require_once ('validate.php'); //validation class
$validate = new validate;

class postCtrl extends main {
	
	
	function create_regsale( $title, $creator, $short_desc, $description, $price, $numsales, $cat, $sub_cat) {
		
		$id = uniqid($creator, true);
		$verified = 0; //not verified regsale post
		
		if(!$validate->authorName($creator)) {
			die("dude?");
		}
		
		$sql = "
		INSERT INTO regsales (id, title, creator, short_desc, description, price, numsales, verified, cat, sub_cat)
		VALUES ('$id', '$title', '$creator', '$short_desc', '$description', '$price', '$numsales', '$verified', '$cat', '$sub_cat')
		";
		
		$query = mysql_query($sql);
		
		if ($query)	return $query;
		else return FALSE;
	}
	
	
	function edit_regsale($id, $newtitle, $newshort_desc, $newdescription, $newprice, $newnumsales, $newcat, $newsub_cat) {
		
		$verified = 0; //regsale is being edited, so now is NOT verified
		
		$sql = "
		UPDATE regsales 
		SET title = '$newtitle', short_desc = '$newshort_desc', description = '$newdescription', price = '$newprice', numsales = '$newnumsales', verified = '$verified', cat = '$newcat', sub_cat = '$newsub_cat'
		WHERE id = '$id'
		";
		
		$query = mysql_query($sql);
		
		if ($query)	return $query;
		else return FALSE;
	}
	
	
}

?>
