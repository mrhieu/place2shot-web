<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->Html->css("detail"); ?>
<title>Detail Page</title>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<div class="top_left">
				<div id="img">
						<?php
							echo $this->html->image('icon/avar.png',array('class'=>'img_acc'));
						?>
						<div id="info">
							<div id="info1">
							<?php
								echo $this->html->link( 'Picture s Name' ,'view',array('class'=>'name'));
							?>
							</div>
							<div id="info2">
								<?php
								echo $this->html->link( 'Account s Name' ,'../users/',array('class'=>'name'));
								?>
							</div>
						</div> 
				</div>
	
        </div> <?php /*Finish TOP_LEFT*/ ?>
        
        <div class="top_right">	
			<div id="group1">
				<?php
					echo $this->Form->end(array('div'=>'style1','class'=>'style1_button','label'=>''));
					echo $this->Form->end(array('div'=>'style1','class'=>'style2_button','label'=>''));
				?>	
			</div>
			
			<div id="group2">	
				<?php
					echo $this->Form->end(array('div'=>'style2','class'=>'style3_button','label'=>''));
					echo $this->Form->end(array('div'=>'style3','class'=>'style4_button','label'=>''));
				?>
			</div>
			<div id="group3">
				<?php
					echo $this->Form->end(array('div'=>'style3','class'=>'style5_button','label'=>''));
					echo $this->Form->end(array('div'=>'style3','class'=>'style6_button','label'=>''));	
					echo $this->Form->end(array('div'=>'style3','class'=>'style7_button','label'=>''));
					echo $this->Form->end(array('div'=>'style3','class'=>'style8_button','label'=>''));
				?>	
			</div>		
      	</div> <?php /*Finish TOP_RIGHT*/ ?>
    </div> <?php /*Finish HEADER*/ ?>
    
    <div id="content">
        <div id="left">
        </div>
    	<div id="center">
					<span class="image" style="background-image:url(<?php echo $this->webroot; ?>img/Image/1.jpg);">
					</span>
        </div>
        
					<div id="right">
						<div id="right_1">
							<?php
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
								echo $this->html->image('image/img_site.jpg',array('class'=>'img_site'));
							?>
						</div>	
					</div>
						<div id="right_2">
						
						</div>
					</div>
    </div> <?php /*Finish CONTENT*/ ?>
    
    <div id="footer">
    	<div id="text">
			<?php
			
				/*
					THông tin ảnh
				
				*/
			?>
        </div>
        
	</div> <?php /*FINISH FOOTER*/ ?>
</div>
</body>
</html>
