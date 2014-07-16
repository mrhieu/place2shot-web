<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->html->css("banner"); ?>
<?php echo $this->html->css("register.css"); ?>
<title>Untitled Document</title>
<style type="text/css">
/*	RESET CSS	*/
*{
	margin:0px;
	padding:0px;
}


</style>
<script>
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
					case "pass" :
						if(document.getElementById("password").value=="password"){
							document.getElementById("password").value="";
						}
						break;
					case "repass" :
						if(document.getElementById("repassword").value=="repassword"){
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
					case "pass" :
						if(document.getElementById("password").value==""){
							document.getElementById("password").value="password";
						}
						break;
					case "repass" :
						if(document.getElementById("repassword").value==""){
							document.getElementById("repassword").value="repassword";
						}
						break;
		}
	}
</script>
</head>

<body>
<table class="khung" cellspacing="0" cellpadding="0">
  <tr class="banner">
    <td>
		<table class="banner_tool" cellspacing="0" cellpadding="0">
		  <tr>
			<td>
				<table class="menu_banner"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="logo"><img src="images/logo.png"  /></td>
					<td class="discover"><img src="images/discover.png"  />Discover</td>
					<td class="buy"><img src="images/buy.png"  />Buy</td>
					<td class="upload"><img src="images/upload.png"  />Upload</td>
				  </tr>
				</table>
			</td>
			<td >
				<table class="search"  cellspacing="0" cellpadding="0">
				<form class="search" action="#" method="post">
				  <tr>
					<td class="text_search"><input type="text" name="search"  /></td>
					<td class="logo_search"><img src="images/search.png"  /></td>
				  </tr>
				</form>
				</table>
			</td>
			<td>
				<table class="user" width="200"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="sign_up"><img src="sign_up.png"  />Sing up</td>
					<td class="chose"><img src="chose"  /></td>
				  </tr>
				</table>

			</td>
		  </tr>
		</table>
	</td>
  </tr>
  
  <tr class="main">
    <td>
		<div class="profile_border">
		<table class="profile"  cellspacing="0" cellpadding="0">
	  	<form action="#" method="post">
			  <tr>
				<td class="register" colspan="2">Register</td>
			  </tr>
			  <tr>
				<td class="hr_class" colspan="2"><hr /></td>
			  </tr>
			  <tr>
				<td	 class="username"><input id="user_name" type="text" name="user_name" value="User Name" title="USER NAME" onfocus="set_not_value(this.name);" onblur="set_default_value(this.name)"/></td>
				<td class="email"><input id="email" type="email" name="email" value="Email" title="EMAIL" onfocus="set_not_value(this.name)" onblur="set_default_value(this.name)"/></td>
			  </tr>
			  <tr>
				<td class="password"><input id="password" type="password" name="pass" value="password"  title="PASSWORD" onfocus="set_not_value(this.name)" onblur="set_default_value(this.name)"/></td>
				<td class="sex">
					<select class="sex" title="SEX">
						<option value="male" name="gioi_tinh">male</option>
						<option value="female" >female</option>
						<option value="other">other</option>
					</select>
				</td>
			  </tr>
			  <tr>
				<td class="pass"><input id="repassword" type="password" name="repass" value="repassword" title="REPASSWORD" onfocus="set_not_value(this.name)" onblur="set_default_value(this.name)"/></td>
				<td class="submit" ><input type="submit" name="submit" value="REGISTER" /></td>
			  </tr>
			  <tr>
				<td class="hr_class" colspan="2"><hr /></td>
			  </tr>
			  <tr>
				<td class="for_got_pw" colspan="2"><a href="#" >Forgot your password?</a></td>
			  </tr>
		  </form>
        </table>
		</div>
	</td>
  </tr>
  <tr class="footer">
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
