<?php
/*******************************************************
Validate.php
This file holds the validate class which does all kinds of validation stuff and regex.
*******************************************************/

require_once("main.php");

class validate extends main {
	
	//validate email addresses
	function  email($email) {
		if (preg_match("/^( [a-zA-Z0-9] )+( [a-zA-Z0-9\._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9\._-] +)+$/" , $email)) return true;
		else return false;
	}
	
	function authorName ($name) {
		if (preg_match("/[a-zA-Z0-9] )+( [a-zA-Z0-9\._-]/", $name)) return true;
		else return false;
	}
	

}
?>