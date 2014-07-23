function set_not_value(name){
		switch(name){
					case 'user_name':
						if(document.getElementById("user_name").value=="User Name"){
							document.getElementById("user_name").value="";
						}
						break;
					case "email" :
						if(document.getElementById("email").value=="Email"){
							document.getElementById("email").value="";
						}
						break;
					case "password" :
						if(document.getElementById("password").value=="password"){
							document.getElementById("password").value="";
						}
						break;
					case "repassword" :
						if(document.getElementById("repassword").value=="password"){
							document.getElementById("repassword").value="";
						}
						break;
		}
	}
	function set_default_value(name){
		switch(name){
					case 'user_name':
						if(document.getElementById("user_name").value==""){
							document.getElementById("user_name").value="User Name";
						}
						break;
					case "email" :
						if(document.getElementById("email").value==""){
							document.getElementById("email").value="Email";
						}
						break;
					case "password" :
						if(document.getElementById("password").value==""){
							document.getElementById("password").value="password";
						}
						break;
					case "repassword" :
						if(document.getElementById("repassword").value==""){
							document.getElementById("repassword").value="password";
						}
						break;
		}
	}