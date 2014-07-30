<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->html->css("banner"); ?>
<title>Untitled Document</title>
<style type="text/css">
/*	RESET CSS	*/
*{
	margin:0px;
	padding:0px;
}

</style>
</head>
<body>
<table class="khung" cellspacing="0" cellpadding="0">
  <tr class="banner">
    <td>
		<table class="banner_tool" cellspacing="0" cellpadding="0">
		  <tr>
			<td class="menu_banner">
				<table class="menu_banner"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="logo">
						<?php
							echo $this->Html->link(
								$this->Html->image('icon/logo.png', array('class' => 'logo')),
								array('controller'=>'photos','action'=>'index'),
								array('escape' => false)
							);
						?>
					</td>
					<td class="discover">
						<?php
							echo $this->Html->link(
								$this->Html->image('icon/discover.png').' Discover',
								array('controller'=>'photos','action'=>'index'),
								array('escape' => false)
							);
						?>
					</td>
					<td class="upload">
						<?php
							echo $this->Html->link(
								$this->Html->image('icon/upload.png').' Upload',
								array('controller'=>'photos','action'=>'add'),
								array('escape' => false)
							);
						?>
					</td>
				  </tr>
				</table>
			</td>
			<td class="search">
				<table class="search"  cellspacing="0" cellpadding="0">
					<?php
						echo $this->Form->create('form_search',array(
							'inputDefaults' => array(
								'label' => false,
								'div' => false
							)
							));
					?>
				  <tr>
					<td class="text_search">
						<input name="data[form_search][search_text]" value="search..." id="search_text" type="text" onfocus="if(this.value=='search...') this.value='';" onblur="if(this.value=='') this.value='search...';"/>
					</td>
					<td class="logo_search">
						<?php
							echo $this->Form->end('Search');
						?>
					</td>
				  </tr>
				</form>
				</table>
			</td>
			<td class="user">
				<table class="user" width="200"  cellspacing="0" cellpadding="0">
				  <tr>
					<?php if($logged_in):?>
						<?php echo '<td class="prfile">';?>
						<table class="prfile_tb" cellspacing="5" cellpadding="0">
							<tr>
								<td>
								<?php  echo $this->Html->image('uploads/avatas/thumb/small'.'/'.$current_user['avata'], array('alt' => 'Gallery Image', 'height'=>30, 'width'=>30));?>
								</td>
								<td>
								<?php echo $this->Html->link($current_user['name'], array('controller'=>'users','action' => 'view', $current_user['id'])); ?>
								</td>
							</tr>
						</table>
						<?php echo '</td>';?>
						<?php echo '<td class="logout">';?>
							<?php echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'));?>
						<?php echo '</td>';?>
					<?php else: ?>
						<?php echo '<td class="register">';?>
								<?php echo $this->Html->link('Register', array('controller'=>'users','action'=>'add'));?>
						<?php echo '</td>';?>
						<?php echo '<td class="Login">';?>
							<?php echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));?>
						<?php echo '</td>';?>
					<?php endif; ?>
				  </tr>
				</table>

			</td>
		  </tr>
		</table>
	</td>
  </tr>
  
  <tr class="main">
    <td>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
				
            
			<?php echo $content_for_layout; ?>
	</td>
  </tr>
  <tr class="footer">
    <td>
		<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
	</td>
  </tr>
</table>
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>