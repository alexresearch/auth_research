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
    <div id="register">
        <form action="../action/register.php" enctype="multipart/formdata" id="register_form">
        	<input type="text" placeholder="Login..." size=16 onkeyup="check(this.value, this.id)" id="login_f" /><br/>
        	<input type="password" placeholder="Password..." size=16 onkeyup="check(this.value, this.id)" id="password_f_n"/><br/>
            <input type="password" placeholder="Repeat password..." size=16 onkeyup="check(this.value, this.id, password_f_n.value)" id="password_f_r" /><br/><br/>
            <input type="file" id="upload"></input><br/><br/>
            <input type="submit" value="Create an accaunt" class="css3button"/>
         </form>
         <br/>
        <div id="status"></div>
    </div>
</body>
</html>
