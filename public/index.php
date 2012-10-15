<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>auth_research</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<?php  if (isset($_COOKIE['id']) && isset($_COOKIE['hash'])) {
	
		include_once '../config/config.php';
		mysql_connect($host, $user, $pass);
		mysql_select_db($db);
	
		$query = mysql_query("SELECT id, hash, INET_NTOA(ip) FROM users WHERE id = '" . intval($_COOKIE['id']) . "' LIMIT 1");
		$obj = mysql_fetch_assoc($query);
		
		if(($obj['hash'] !== $_COOKIE['hash']) || ($obj['id'] !== $_COOKIE['id']) || (($obj['INET_NTOA(ip)'] !== $_SERVER['REMOTE_ADDR'])  && ($obj['INET_NTOA(ip)'] !== "0")))
			echo "<script>alert('Cookie failed');</script>";
		else echo "<h1>Hello userId[" . $obj['id'] . "] from " . $obj['INET_NTOA(ip)'];
	  	}
	  	else echo "<script>alert('Enable cookie');</script>";
	?>
    
</body>
</html>