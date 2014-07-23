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
	#container,header,content,footer{
	width:100%;
	}
    	#header{
		position: relative;
    		background: #222222;
    		height: 50px;			
			-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.25);
				box-shadow: 0 1px 3px rgba(0,0,0,0.25);
				transition: background-color 0.1s ease-out;
				-webkit-transition: background-color 0.1s ease-out;
				-ms-transition: background-color 0.1s ease-out;
				-moz-transition: background-color 0.1s ease-out;
				-o-transition: background-color 0.1s ease-out;
    	}
		.logo img{
			height:50px;
			width:140px;
			background-position:center;
			background-repeat:no-repeat;
			display:block;
			background-size:100% 100%;
		}
		.logo img:hover{
		background-color:#303030;
		width:140px;
		height:50px;
		}
    	.avata-user{
    		height: 100px;
    		width: 100px;
    		background: #000;
    		border: 1px solid #CCC;
			margin-top:10px;
			
    	}
    	.profile{
    		display: inline-table;
    		float: left;
			
    	}
		.user-nav{
			float:right;
		}
			.user-nav ul{
				position: relative;
				float: left;
				display: block;
				top: 0;
				font-size: 0;
			}
			.user-nav ul li{
				display: inline-block;
				vertical-align: top;
				height: 100%;
				line-height: 50px;
				font-size: 14px;
			}
			.user-nav ul li a{
				display: block;
				height: 100%;
				padding: 0 13px;
				font-weight: 400;
				letter-spacing: 0.025em;
				white-space: nowrap;
			}
			.user-nav ul li a:hover{
			background-color:yellow;
			height:50px;
			max-width:50px;
			}
			.avar{
			float:left;
			margin-top:15px;
			margin-right:5px;
			}
				.user-nav ul li a strong{
					font-size: 14px;
					display: block;
					font-weight: inherit;
					height: 50px;
					max-width: 100px;
					overflow: hidden;
					text-overflow: ellipsis;
					}
    </style>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="user-nav">
				
						

				<?php if($logged_in):?>
		            <ul>
		            	<li class="logout"><?php echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'));?> </li>
		            	<li class="upload"><?php echo $this->Html->link('Upload', array('controller'=>'photos','action'=>'add'));?> </li>
		      			<li class="info">
		      				<span class="avar"><?php  echo $this->Html->image('uploads/avatas/thumb/small'.'/'.$current_user['avata'], array('alt' => 'Gallery Image', 'height'=>30, 'width'=>20));?></span>
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

			<div class="profile">
				<div class="right">
		        	<ul>
		        		<li> <?php echo Buy ?> </li>
						<li> <?php echo Discoverry ?> </li>
		        		<li>
						
						<?php
							echo $this->Html->link(
								$this->Html->image('icon/logo.png', array('alt' => 'Gallery Image')),
								array('controller'=>'photos','action'=>'index'),
								array('class' => 'logo',"alt" => "Brownies",'escape' => false)
							);
						?>
						</li>
					
				</div>

				
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