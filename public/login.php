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
	<div id="enter">
		<img src="css/img/enter.png" onclick="show('signin','enter')" />
	</div>
	<div id="signin">
		<a href="" title="Close window" style="float: right;" onclick="close('login', 'enter')">
        	<img src="css/img/close.png" height="25px" width="25px"/>
        </a>
    	<form id="login_form" action="../action/login.php" method="post">
			<input type="text" placeholder="Login..." size=16 onkeyup="check(this.value, this.id)" name="login" id="login" /><br/>
			<input type="password" placeholder="Password..." size="16" onkeyup="check(this.value, this.id)" name="password" id="password"/>
			<input type="checkbox" id="check_ip" name="check_ip" onchange="bind()" />
			<br/>
			<input type="submit" name="submit" value="Sign In" class="css3button"/>
			<a href="register.php">or register now</a>
		</form>
		<div id="status"></div>
	</div>
</body>
</html>
