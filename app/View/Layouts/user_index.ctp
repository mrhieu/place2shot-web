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
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?=$this->Html->charset()?>
	<?= $this->Html->meta('message.ico', 'message.ico', array('type' => 'icon'))?>
	<?=$this->fetch('meta')?>

	<?=$this->Html->css(array(
		'cake.generic',
		'bootstrap/bootstrap',
		'general'
	))?>
	<?=$this->fetch('css')?>

	<?=$this->Html->script(array(
		'jquery/jquery-1.9.1',
		'jquery/jquery-ui-1.10.3.custom.min',
		'jquery/general',
		'bootstrap/bootstrap',
		'jquery/jquery.cluetip/jquery.cluetip.min',                             // complex tooltips
	))?>
    <style>
    	#header{
    		background: #222;
    		height: 200px;
    	}
    	.avata-user{
    		height: 100px;
    		width: 100px;
    		background: #000;
    		border: 1px solid #CCC;
    	}
    	.menu{
    		display: inline;
    		float: left;
    	}
    	.profile{
    		display: inline-table;
    		padding-left: 50px;
    		padding-top: 20px; 
    		height: 80px;
    	}
    	.sub-profile{
    		float: left;
    		padding-left: 120px;
    		padding-top: 20px;
    		color: #CCC;
    	}
    	.actions{
    		float: left;
    		padding-top: 30px;
    		padding-left: 50px;
    	}
    	.name{
    		width: 500px;
    		text-align: left;
    	}
    </style>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="clear"> </div>
			<div class="user-nav">	
				<?php if($logged_in):?>
		            <ul>
		            	<li><?php echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'));?> </li><li><?php echo $this->Html->link('Upload', array('controller'=>'photos','action'=>'add'));?> </li>	
		      			<li>
		      				<span><?php  echo $this->Html->image($current_user['avata'], array('alt' => 'Gallery Image', 'height'=>30, 'width'=>20));?></span>
		      				<strong><?php echo $this->Html->link($current_user['name'], array('controller'=>'users','action' => 'view', $current_user['id'])); ?></strong> 	
		      			</li>
		            </ul>
		        <?php else: ?>
		            <ul>
		                <li><?php echo $this->Html->link('Register', array('controller'=>'users','action'=>'add'));?> </li>
		                <li><?php echo $this->Html->link('Upload', array('controller'=>'photos','action'=>'add'));?> </li>
		                <li><?php echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));?> </li>
		            </ul>
		        <?php endif; ?>
		    </div>

			<div class="menu">
				<ul>
					<li> <?php echo Buy ?> </li>
					<li> <?php echo Discoverry ?> </li>
					<li >
						<?php echo $this->Html->link('Home', array('controller'=>'photos','action'=>'index'));?>		
					</li>
					
					
				</ul>			
			</div>
			<div class="clear"> </div>
			<div class="profile">
				<ul>
					<li>
						<div class="name">
						<h2> <?php echo $current_user['name']; ?></h2>
						</div>
					</li>
					<li >
						<div class="avata-full">
						<?php  echo $this->Html->image($current_user['avata'], array('alt' => 'Gallery Image', 'height'=>100, 'width'=>100));?>
						</div>
					</li>
					<div class="clear"> </div>
					<div class="sub-profile">
					 	<ul>
							<li><?php echo $this->Html->link('Manage', array('controller'=>'users','action' => 'view_relate', $user['User']['id'])); ?></li>
							<li><?php echo $this->Html->link('Upload', array('controller'=>'photos','action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Setting', array('controller'=>'users','action' => 'edit', $current_user['id'])); ?></li>			
						</ul> 
					</div>
				</ul>
			</div>
			<div class="clear"> </div>
			
	        <div class="actions" >
				<ul >
		    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		    	<?php if($current_user['roles' ] == 'admin'): ?>
		    		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		        	<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	        	<?php endif; ?>
		        	<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Upload', true), array('action' => 'add')); ?></li>
					<!-- <li><?php echo $this->Html->link(__('About', true), array('controller' => 'comments', 'action' => 'index')); ?> </li> -->
				
				</ul>
			</div> 
    	</div>
    
		<div id="content">
			
       		<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
				
            
			<?php echo $content_for_layout; ?>

		</div>
		

		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>