function set_not_value(name){
		switch(name){
					case 'user_name':
						if(document.getElementById("user_name").value=="User Name"){
							document.getElementById("user_name").value="";
						}
						break;
					case "password" :
						if(document.getElementById("password").value=="password"){
							document.getElementById("password").value="";
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
					case "password" :
						if(document.getElementById("password").value==""){
							document.getElementById("password").value="password";
						}
						break;
		}
	}