<?php
function echo_json($error)
{
	header('Content-type: application/json');
	echo json_encode($error);
	exit();
}

//if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
//		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 
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
		
		if(!preg_match_all($reg_exp, $login)) echo_json(1); 
		if(!preg_match_all($reg_exp, $password)) echo_json(2);
		if(strlen($login) < 4 or strlen($login) > 16) echo_json(3);
	    if(strlen($password) < 4 or strlen($password) > 16) echo_json(4);
		
		$query = mysql_query('SELECT COUNT(id) FROM users WHERE login=' . mysql_real_escape_string($login));
		
		if(mysql_result($query, 0) > 0) echo_json(0);
	
		if(count($err) == 0)
		{
			$password = md5(md5(trim($password)));
			
			mysql_query("INSERT INTO users (login, password) VALUES ($login, $password)");
			
			echo_json('success');
		}
//}

?>
