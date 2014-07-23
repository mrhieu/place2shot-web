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
		<div class="profile_border">
		<table class="profile"  cellspacing="0" cellpadding="0">
	  	<?php
			echo $this->Form->create('form_register',array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				)
			));
		?>
			  <tr>
				<td class="register" colspan="2">LOGIN</td>
			  </tr>
			  <tr>
				<td class="hr_class" colspan="2"><hr /></td>
			  </tr>
			  <tr>
				<td	 class="username">
					<?php 
					echo $this->Form->input('username',array(
						'type'=>'text',
						'value'=>'User Name',
						'id'=>'user_name',
						'title'=>'USER NAME',
						'onfocus'=>'set_not_value(this.id)',
						'onblur'=>'set_default_value(this.id)'
					));
					?>
				</td>
			  </tr>
			  <tr>
				<td class="password">
				<?php 
					echo $this->Form->input('password',array(
						'type'=>'password',
						'value'=>'password',
						'id'=>'password',
						'title'=>'PASSWORD',
						'onfocus'=>'set_not_value(this.id)',
						'onblur'=>'set_default_value(this.id)'
					));
				?>
				</td>
			  </tr>
			  <tr>
				<td class="submit" >
				<?php 
					echo $this->Form->end('LOGIN');
				?>
				</td>
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
