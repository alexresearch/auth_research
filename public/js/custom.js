function show(login, enter) {
     sleep(200);
     var srcElement = document.getElementById(login);
     var hideElement = document.getElementById(enter);
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
  
function register(register, login) {
     var srcElement = document.getElementById(register);
     var hideElement = document.getElementById(login);
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
  
function close(login, enter) {
    document.getElementById(login).style.display == "none";
    document.getElementById(enter).style.display == "block";
    return false;
  }
  
function sleep(ms) {
    ms += new Date().getTime();
    while (new Date() < ms){}
} 

$(document).ready(function() {
	
    $("#login_form").submit(function() {
	
        $("#status").text('Checking....').fadeIn(1000);
        
        var login = $("#login").val();
	var password = $("#password").val();
        
        //var domain = 'http://' + window.location.hostname + '/auth/controller/login.php';
        var domain = 'http://git/auth_research/controller/login.php';
        
        
	$.ajax({
            type: "POST",
            url: domain,
            dataType: 'JSON',
            data: {
                login: login, 
                password: password
            },
            success: function(response) {
                        if(response == '0')
                                $("#status").html("Incorrect login or password");	
			else if(response == '1')	
				document.location='http://localhost';
                            //    document.location='http://' + window.location.hostname;
                            
                        else if(response == '2')
                                document.location='http://' + window.location.hostname + '/admin';
                    }
                });
		
	return false;
	});
});


$(document).ready(function() {
	
	$("#register_form").submit(function() {
		
		$("#status").text('Checking...').fadeIn(1000);
        
        var login = $("#username").val();
		var n_password = $("#n_password").val();
		var r_password = $('#r_password').val();
		var upload_file = $('#upload');
        var domain = 'http://' + window.location.hostname + '/auth_research/controller/register.php';
             
		$.ajax({
            type: "POST",
            url: domain,
            dataType: 'JSON',
            data: {
                login:login, 
                n_password:n_password,
                r_password:r_password,
                photo:upload_file
                
            },
            success: function(response) {
                        if(response == '0')
                                $("#status").html("Incorrect login or password");	
			else if(response == '1')	
				document.location='http://localhost';
                            //    document.location='http://' + window.location.hostname;

                    }
                });
		
	return false;
	});
});
