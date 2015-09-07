<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mysql = "localhost";
$database_mysql = "mydw_data";
$username_mysql = "root";
$password_mysql = "";
$mysql = mysql_pconnect($hostname_mysql, $username_mysql, $password_mysql) or trigger_error(mysql_error(),E_USER_ERROR); 
?>