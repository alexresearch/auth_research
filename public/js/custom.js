function check(value, field, rep) {
	xmlhttp=new XMLHttpRequest();
	
	switch(field)
	{
		case 'login_f':
			xmlhttp.onreadystatechange=function() {
  				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
  					switch(xmlhttp.responseText)
  					{
  						case '0':
    						document.getElementById("login_f").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='This login already exists';
    						break;
  						case '1':
  							document.getElementById("login_f").style.border="2px solid #40FF00";
    						document.getElementById("status").innerHTML='Correct input';
    						break; 					
    					case '2':
    						document.getElementById("login_f").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='Acceptable English characters and numbers';
    						break;
    					case '3':
    						document.getElementById("login_f").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='The permissible range: 4 to 16 characters';
    						break;
    				}
    			}
  			}
			xmlhttp.open("GET","http://" + window.location.hostname + "/auth_research/action/check.php?value="+value+"&field="+field,true);
			xmlhttp.send();
			break;
		case 'password_f_n':
			xmlhttp.onreadystatechange=function() {
  				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
  					switch(xmlhttp.responseText)
  					{
  						case '1':
  							document.getElementById("password_f_n").style.border="2px solid #40FF00";
    						document.getElementById("status").innerHTML='Correct input';
    						break; 					
    					case '2':
    						document.getElementById("password_f_n").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='Acceptable English characters and numbers';
    						break;
    					case '3':
    						document.getElementById("password_f_n").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='The permissible range: 4 to 16 characters';
    						break;
    				}
    			}
  			}
			xmlhttp.open("GET","http://" + window.location.hostname + "/auth_research/action/check.php?value="+value+"&field="+field,true);
			xmlhttp.send();
			break;
		case 'password_f_r':
			xmlhttp.onreadystatechange=function() {
  				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
  					switch(xmlhttp.responseText)
  					{
  						case '1':
  							document.getElementById("password_f_r").style.border="2px solid #40FF00";
    						document.getElementById("status").innerHTML='Correct input';
    						break; 					
    					case '2':
    						document.getElementById("password_f_r").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='Acceptable English characters and numbers';
    						break;
    					case '3':
    						document.getElementById("password_f_r").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='The permissible range: 4 to 16 characters';
    						break;
    					case '4':
    						document.getElementById("password_f_r").style.border="2px solid #FF0000";
    						document.getElementById("status").innerHTML='Passwords do not match';
    						break;
    				}
    			}
  			}
			xmlhttp.open("GET","http://" + window.location.hostname + "/auth_research/action/check.php?value="+value+"&field="+field+"&rep="+rep,true);
			xmlhttp.send();
			break;
	}
}

function show(open, hide) {
    var srcElement = document.getElementById(open);
    var hideElement = document.getElementById(hide);
    if(srcElement != null) {
		if(srcElement.style.display == "block") {
    		srcElement.style.display= 'none';
   		}
    	else {
    		srcElement.style.display='block';
        	hideElement.style.display='none';
    	}
    }  
    return false;
 }
  
function close(open, hide) {
    document.getElementById(open).style.display == "none";
    document.getElementById(hide).style.display == "block";
    return false;
} 
