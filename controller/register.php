<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 
		$host = 'localhost';
		$user = 'user';
		$pass = 'mysql';
		$db = 'auth';
		
		$login = $_POST['login'];
		$password = $_POST['password'];

		$reg_exp = "/^[a-zA-Z0-9]+$/";
	
		mysql_connect($host, $user, $pass);
		mysql_select_db($db);
		
		$error = array();
		
		if(!preg_match_all($reg_exp, $login) || !preg_match_all($reg_exp, $password))
			$error[] = 'Acceptable: English characters and numbers';
		
		if((strlen($login) || strlen($password) < 4) or (strlen($login) || strlen($login) > 16))
			$error[] = 'The permissible range: 4 to 16 characters';
		
		$query = mysql_query('SELECT COUNT(id) FROM users WHERE login=' . mysql_real_escape_string($login));
		
		if(mysql_result($query, 0) > 0)
			$error[] = 'This login already exists';
	
		if(count($err) == 0)
		{
			$password = md5(md5(trim($password)));
			
			mysql_query("INSERT INTO users (login, password) VALUES ($login, $password)");
			
			header('Content-type: application/json');
			echo json_encode(1);
		}
}
else {
	header('Content-type: application/json');
    echo json_encode(0);        
}

?>
