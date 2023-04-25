<?php
	$dhost = 'localhost'; //localhost
	$uname = 'root'; //username of your database
	$pword = ''; //password of your database
	$dbase = 'nyscreg'; //database name
	mysql_connect ($dhost,$uname,$pword) or die (mysql_error());
	mysql_select_db($dbase) or die (mysql_error());
?>