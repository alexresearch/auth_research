<?php
include_once '../config/config.php';

if(isset($_POST['submit'])) {

		mysql_connect($host, $user, $pass);
		mysql_select_db($db);
		
		$login = $_POST['login_f'];
		$password = $_POST['password_f_n'];
		$repeat = $_POST['password_f_r'];
		$file = null;
		
		$exts = array("jpg", "jpeg", "gif", "png");
		$tmp = explode(".", $_FILES["file"]["name"]);
		$extension = end($tmp);
		
		$query = mysql_query('SELECT COUNT(id) FROM users WHERE login=' . mysql_real_escape_string($login));
		
		if(preg_match($reg_exp, $login) &&
	       preg_match($reg_exp, $password) &&
		   preg_match($reg_exp, $repeat) &&
		   strlen($login) > 3 && strlen($login) < 17 &&
		   strlen($password) > 3 && strlen($password) < 17 &&
		   strlen($repeat) > 3 && strlen($repeat) < 17 &&
		   $password == $repeat &&
		   (mysql_result($query, 0) == 0)) {
				if($_FILES["file"]["error"] == 0 && !(file_exists("../upload/" . $_FILES["file"]["name"]) && in_array($extension, $exts) 
					&&
				       ($_FILES["file"]["type"] == "image/jpg" 
					 || $_FILES["file"]["type"] == "image/jpeg"
					 || $_FILES["file"]["type"] == "image/png"
					 || $_FILES["file"]["type"] == "image/gif"))
						) 
				{
							move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
							$file = $_FILES["file"]["name"]; }
			$password = md5(md5(trim($password)));
			mysql_query("INSERT INTO users (login, password, photo) VALUES ('$login', '$password', '$file')");
			header("Location: ../public/index.php");
		}
	}
?>
