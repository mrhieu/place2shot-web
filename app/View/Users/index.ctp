<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->html->css("profile"); ?>
<title>Profile Page</title>
</head>

<body>
	<div id="wrapper">
    	<div id="header">
        	<div id="top_header">
            	<div class="img_acc">
                	<span class="acc_img" style="background-image:url(<?php echo $this->webroot; ?>img/icon/avar.png);display:block;"></span>
                </div>
                
                <div class="info">
                	<div class="name">
                    	<p class="name_acc">Name Acc</p>
                    </div>
                    
                    <div class="details">
    					<p class="detail">Detail1</p>
                        <p class="detail">Detail2</p>
                        <p class="detail">Detail3</p>
                    </div>
						<?php
							echo $this->Form->end(array('div'=>'bonus','class'=>'follow','label'=>'FOLLOW'));
							echo $this->Form->end(array('div'=>'bonus','class'=>'connect1','label'=>''));
							echo $this->Form->end(array('div'=>'bonus','class'=>'connect2','label'=>''));
							echo $this->Form->end(array('div'=>'bonus','class'=>'connect3','label'=>''));
							echo $this->Form->end(array('div'=>'bonus','class'=>'connect4','label'=>''));
							echo $this->Form->end(array('div'=>'bonus','class'=>'connect5','label'=>''));
						?>
                  
                </div>
            </div>
            
            <div id="bottom_header">
			
				<?php
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'ABOUT'));
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'FOLLOW'));
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'PHOTOS'));
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'SETS'));
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'STORIES'));
					echo $this->Form->end(array('div'=>'button','class'=>'style_bt','label'=>'STORE'));
				?>
            </div>
        </div>
    	
        <div id="content">
			<?php
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
				echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					"view",
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
			?>
        </div>
        
        <div id="footer">
        
        </div>
    </div>
</body>
</html>
