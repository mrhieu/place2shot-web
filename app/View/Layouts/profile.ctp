<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->html->css("profile"); ?>
<?php echo $this->html->script("jquery/fancy/lib/jquery-1.10.1.min");?>
<?php echo $this->html->script("jquery/fancy/source/jquery.fancybox");?>
<?php echo $this->html->css("jquery.fancybox");?>

<script type="text/javascript">
	$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
		$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});
			
		});
</script>

<title>Profile Page</title>
</head>

<body>
	<div id="wrapper">
    	<div id="header">
        	<div id="top_header">
            	<div class="img_acc">
                	<span class="acc_img" style="background-image:url(<?php echo $this->webroot; ?>img/uploads/avatas/thumb/small/<?php echo $user['User']['avata']?> );display:block;">
                    </span>
                </div>
                
                <div class="info">
                	<div class="name">
                    	<p class="name_acc"><?php echo $user['User']['name']; ?></p>
                    </div>
                    <?php if ($current_user['roles'] == 'admin' || $current_user['id'] == $user['User']['id']): ?>
                        <div class="details">
                            <p class="detail"><?php echo $this->Html->link('Setting', array('controller'=>'users','action' => 'edit', $user['User']['id'])); ?></p>
                            <p class="detail"><?php echo $this->Html->link('Upload', array('controller'=>'photos','action' => 'add')); ?></p>
                            <p class="detail"><?php echo $this->Html->link('Manage', array('controller'=>'users','action' => 'view_relate', $user['User']['id'])); ?></p>
                        </div>
                    <?php endif; ?>
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
				$i = 0;
				foreach ($user['Photo'] as $photo):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
			
						echo $this->Html->link(
					$this->Html->image('uploads/images/thumb/large/'.'/'.$photo['img_file'], array('alt' => 'Gallery Image')),
					array('controller'=>'photos','action'=>'view',$photo['id']),
					array('class' => 'fancybox fancybox.iframe','escape'=>false)
				);
			endforeach;
			?>
        </div>
        
        <div id="footer">
		<script type="text/javascript" language="javascript" >
			function pop() {
			window.open("legend.php","Homepage","resizable=no,status=no,scrollbars=no,height=6000,width=1000,left=0,top=100,menubar=no,addressbar=no");
		}

</script>
        </div>
    </div>
</body>
</html>
