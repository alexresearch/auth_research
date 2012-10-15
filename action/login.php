<?php
include_once '../config/config.php';

if(isset($_POST['submit']))
{
	$login = $_POST['login'];
	$password = $_POST['password'];

	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	
	$query = mysql_query("SELECT id, password, login FROM users WHERE login='".mysql_real_escape_string($login)."' LIMIT 1");
	$obj = mysql_fetch_assoc($query);
	
	if(preg_match($reg_exp, $login) &&
	   preg_match($reg_exp, $password) &&
	   strlen($login) > 3 && strlen($login) < 17 &&
	   strlen($password) > 3 && strlen($password) < 17 &&
		$obj['password'] == md5(md5($password))) {
		$hash = md5(generateHash(10));
		if(isset($_POST['check_ip']))
			mysql_query("UPDATE users SET hash='$hash', ip=INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "') WHERE id='" . $obj['id'] . "'");
		else
			mysql_query("UPDATE users SET hash='$hash' WHERE id='" . $obj['id'] . "'");
		setcookie('id', $obj['id'], time()+60*60*24*30, "/");
		setcookie('hash', $hash, time()+60*60*24*30, "/");
		echo "<script>window.location = 'http://' + window.location.hostname + '/auth_research/public/index.php';</script>";
	}
	echo "<script>alert('Failed');window.location = 'http://' + window.location.hostname + '/auth_research/public/login.php';</script>";
}
	
function generateHash($length=5) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";	
	$hash = null;
	$size = strlen($chars) - 1;
	while (strlen($hash) < $length)
		$hash .= $chars[mt_rand(0,$size)];
	return $hash;
}
	
?>
