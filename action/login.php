<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	echo $_GET['field'];
	$host = 'localhost';
	$user = 'root';
	$pass = 'mysql';
	$db = 'auth';
	
	if(!mysql_connect($host, $user, $pass))
		die(mysql_error());
	else
	{
		if(!mysql_select_db($db))
			echo mysql_error();
	}
	
?>
