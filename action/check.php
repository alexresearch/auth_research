<?php
include_once '../config/config.php';

$field=$_GET["field"];
$value=$_GET["value"];

if(isset($field) && isset($value)) {
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	
	switch($field)
	{
		case 'login_f':
			$query = mysql_query("SELECT COUNT(id) FROM users WHERE login='" . mysql_real_escape_string($value) . "'");
			if(mysql_result($query, 0) > 0) echo 0;
			else if(strlen($value) < 4 or strlen($value) > 16) echo 3;
			else if(!preg_match($reg_exp, $value)) echo 2;
			else echo 1;
			break;
		case 'password_f_n':
			if(strlen($value) < 4 or strlen($value) > 16) echo 3;
			else if(!preg_match($reg_exp, $value)) echo 2;
			else echo 1;
			break;
		case 'password_f_r':
			$rep=$_GET["rep"];
			if(strlen($rep) < 4 or strlen($rep) > 16) echo 3;
			else if(!preg_match($reg_exp, $rep)) echo 2;
			else if($value != $rep) echo 4;
			else echo 1;
			break;
		case 'login':
			if(strlen($value) < 4 or strlen($value) > 16) echo 3;
			else if(!preg_match($reg_exp, $value)) echo 2;
			else echo 1;
			break;
		case 'password':
			if(strlen($value) < 4 or strlen($value) > 16) echo 3;
			else if(!preg_match($reg_exp, $value)) echo 2;
			else echo 1;
			break;
	}
}
?>
