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
		<img src="css/img/enter.png" onclick="show('login', 'enter')" />
	</div>
    <div id="login">
    	<a href="" title="Close window" style="float: right;" onclick="close('login', 'enter')">
        	<img src="css/img/close.png" height="25px" width="25px"/>
        </a>
        <div id="status"></div>
        <form id="login_form">
        	<input type="text" placeholder="Login..." size="16" id="login_f"/>
            <input type="password" placeholder="Password..." size="16" id="password_f"/>
            <br/><br/>
            <input type="submit" class="css3button" value="Sign In">
            <a href="register.php">or register now</a>
        </form>
        
    </div>
</body>
</html>
