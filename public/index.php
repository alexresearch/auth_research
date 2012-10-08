<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Auth</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>

	<div id="enter">
    	<a href="" onclick="return show('login_form','enter')">
        	<img src="css/img/enter.png" />
       	</a>
    </div>
        
    <div id="login_form">
    	<a href="" title="Close window" style="float: right;" onclick="return close('login_form', 'enter')">
        	<img src="css/img/close.png" height="25px" width="25px"/>
        </a>
        <form style="margin-left: 19%;margin-top: 10%;">
        	<input type="text" placeholder="Login..." name="login" id="login"></input>
            <input type="text" placeholder="Password..." name="password" id="password"></input>
            <br/>
            <input type="submit" class="css3button" value="Sign In"></input>
            <a href="" onclick="return register('register_form','login_form')">or register now</a>
        </form>
        <br/>
        <div id="status" style="float: left;font-size: 12px;color: #666666;"></div>
    </div>
        
    <div id="register_form">
    	<a href="" title="Close window" style="float: right;" onclick="return close('login_form', 'enter')">
        	<img src="css/img/close.png" height="25px" width="25px"/>
        </a>
        <form action="" enctype="multipart/form-data" method="POST" style="margin-left: 18%;margin-top: 10%;">
        	<input type="text" placeholder="Login..." name="username" id="username" />
            <input type="password" placeholder="Password..." name="n_password" id="n_password" />
            <input type="password" placeholder="Repeat password..." name="r_password" id="r_password" />
            <input type="file" name="upload" id="upload" />
            <input type="submit" name="submit" value="Create an accaunt" class="css3button" style="margin-left: 3%;"/>
         </form>
         <br/>
        <div id="status" style="float: left;font-size: 12px;color: #666666;"></div>
    </div>
 
</body>
</html>
