<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
/*	RESET CSS	*/
*{
	margin:0px;
	padding:0px;
}
/* PHAN BANNER*/
table.banner_tool{
	margin:auto;
	width:1000px;
}

table.khung{
	width:100%;
}
table tr.banner{
	height:50px;
	background-color:#222222;
}
table tr.footer{
	height:80px;
}
table.menu_banner ,table.user{
	height:50px;
	width:400px;
	font-weight:bold;
	color:#CCCCCC;
}
table.search{
	width:300px;
}
table.search tr td.text_search{
	width:90%;
}
table.user{
	width:150px;
	margin-right:10px;
}
table.user tr td.sign_up{
	width:80%;
}
table.menu_banner tr td:hover , table.user tr td:hover {
	background:#333333;
	color:#FFFFFF;
}

/* PHAN MAIN*/
table.profile{
	margin:50px auto;
}
table.profile tr td.for_got_pw{
	 text-align:right;
}
table.profile tr td.for_got_pw a{
	 text-decoration:none;
	 color:#00CCCC;
}
</style>
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
					<td class="logo"><img src="<?php echo $this->webroot; ?>img/images/logo.png"  /></td>
					<td class="discover"><img src="<?php echo $this->webroot; ?>img/images/discover.png"  />Discover</td>
					<td class="buy"><img src="<?php echo $this->webroot; ?>img/images/buy.png"  />Buy</td>
					<td class="upload"><img src="<?php echo $this->webroot; ?>img/images/upload.png"  />Upload</td>
				  </tr>
				</table>
			</td>
			<td >
				<table class="search"  cellspacing="0" cellpadding="0">
				<form class="search" action="#" method="post">
				  <tr>
					<td class="text_search"><input type="text" name="search"  /></td>
					<td class="logo_search"><img src="<?php echo $this->webroot; ?>img/images/search.png"  /></td>
				  </tr>
				</form>
				</table>
			</td>
			<td>
				<table class="user" width="200"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="sign_up"><img src="<?php echo $this->webroot; ?>img/sign_up.png"  />Sing up</td>
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
		<table class="profile" width="600" border="1" cellspacing="0" cellpadding="0">
	  	<form action="#" method="post">
			  <tr>
				<td class="lg_in" colspan="2">Log in</td>
			  </tr>
			  <tr>
				<td	 class="lg_facebook"><img src="<?php echo $this->webroot; ?>img/images/lg_facebook.png"  /></td>
				<td><input type="text" name="user_name"  /></td>
			  </tr>
			  <tr>
				<td class="lg_twitter"><img src="<?php echo $this->webroot; ?>img/images/lg_twitter.png"  /></td>
				<td><input type="password" name="password"  /></td>
			  </tr>
			  <tr>
				<td class="lg_google"><img src="<?php echo $this->webroot; ?>img/images/lg_google.png"  /></td>
				<td class="lg_with_form"><img src="<?php echo $this->webroot; ?>img/images/lg_with_form.png"  /></td>
			  </tr>
			  <tr>
				<td class="for_got_pw" colspan="2"><a href="#" >Forgot your password?</a></td>
			  </tr>
		  </form>
        </table>
	</td>
  </tr>
  <tr class="footer">
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
