<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->html->css("profile"); ?>
<?php echo $this->html->script("jquery/fancy/lib/jquery-1.10.1.min");?>
<?php echo $this->html->script("jquery/fancy/source/jquery.fancybox");?>
<?php echo $this->html->css("jquery.fancybox");?>
<?php echo $this->html->css("banner-prf"); ?>
<?php echo $this->html->script("jquery/search_banner"); ?>
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
    	<div id="header" style=" background-image:url(
		<?php
			if($user['User']['cover'] !=''){
				echo $this->webroot.'img/uploads/covers/'.$user['User']['cover'];
			}
			else 
			echo $this->webroot.'img/image/cover1.jpg';
			?>
			
		
		)" >
		
		<!-- start banner-->
		<table align="center" border="0" class="banner_tool" cellspacing="0" cellpadding="0">
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
								array('controller'=>'photos','action'=>'add', $current_user['id']),
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
						echo $this->Form->create('Photo',array(
							'action' => 'searchbytitle'
							)
							);
					?>
				  <tr>
					<td class="text_search">
						<?php echo $this->Form->input('title', array(
									'div'=>'search_text',
									'label' => false,
									'id'=>'search_text',
									'onclick'=>'help_s()',
									'onblur'=>'help_h()',
									'onDblclick'=>'help_s()',
									'placeholder'=>'Search...',
									'autocomplete'=>'off'
									)); 
						?>
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
		  <tr>
			<td></td>
			<td>
				<div id="goi_y">
					<table border="0" cellspacing="2" cellpadding="0">
						<tr>
							<td class="goi_y_title">tìm kiếm tên ảnh</td>
						</tr>
						<tr>
							<td class="goi_y_val"><button type="button" onclick="get_gy(1)">Biển Đông</button></td>
						</tr>
						<tr>
							<td class="goi_y_val"><button type="button" onclick="get_gy(2)">Cao Nguyên</button></td>
						</tr>
						<tr>
							<td class="goi_y_val"><button type="button" onclick="get_gy(3)">Bãi cỏ</button></td>
						</tr>
						<tr>
							<td class="goi_y_val"><button type="button" onclick="get_gy(4)">Bình minh</button></td>
						</tr>
						<tr>
							<td class="goi_y_val"><button type="button" onclick="get_gy(5)">Suối</button></td>
						</tr>
						<tr>
							<td class="goi_y_kc"><button  type="button" onclick="get_gy(6)">Tìm kiếm theo khoảng cách...</button></td>
						</tr>
					</table>
				</div>
			</td>
			<td></td>
		  </tr>
		</table>
		<!-- End banner-->
		
		<div class="menu-profile">
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
                            <p class="detail"><?php echo $this->Html->link('Upload', array('controller'=>'photos','action' => 'add', $user['User']['id'])); ?></p>
                            <p class="detail"><?php echo $this->Html->link('Manage', array('controller'=>'users','action' => 'view_relate', $user['User']['id'])); ?></p>
							
                        </div>
                    <?php endif; ?>
						<?php
							
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
				 <?php if ($current_user['roles'] == 'admin' || $current_user['id'] == $user['User']['id']): ?>
					<p class="change"><?php echo $this->Html->link('CHANGE COVER', array('controller'=>'users','action' => 'editcover', $user['User']['id'])); ?></p>
				 <?php endif; ?>
            </div>
        </div> 
		
		</div><!--END HEADER-->
    	
        <div id="content">
			<?php 
				$i=0;$mang=array();
					$diachi=array();
					foreach ($user['Photo'] as $photo): 
						$mang[$i]= $photo['img_file'];
						$diachi[$i]=$photo['id'];
						$ten[$i]=$photo['title'];
						$i++;
					
				endforeach;
				?>
			<?php
				for($j=$i;$j--;$j>=0)
				{
				?>
				<table class="anh" border="0" cellpadding="0" cellspacing="0" >
				<tr>
					<td class="anh1"  cellpadding="0" cellspacing="0">
						<?php echo $this->Html->link(
						$this->Html->image('uploads/images/thumb/large/'.'/'.$mang[$j], array('alt' => 'Gallery Image')),
						array('controller'=>'photos','action'=>'view',$diachi[$j]),
						array('class' => 'fancybox fancybox.iframe','escape'=>false)
						);
						?>
							<?php if ($current_user['roles'] == 'admin' || $current_user['id'] == $user['User']['id']): ?>						
								<table class="thong_tin" border="0">
									<tr>
									<td class="edit">
									<?php echo $this->Html->link(
										$this->Html->image('icon/edit.png', array('alt' => 'btn')),
										array('controller' =>'photos','action' => 'edit', $diachi[$j]),
										array('class' => 'btn','escape'=>false)	
									);
									?>
									</td>
									<td class="delete">
									<?php	echo $this->Form->postLink(
										$this->Html->image('icon/delete.png', array('alt' => 'btn')),
										array('controller' =>'photos','action' => 'delete', $diachi[$j], $current_user['id']),
										array('class' => 'btn','escape'=>false),
										__('Are you sure you want to delete: %s?', $ten[$j].' '.$diachi[$j])
									)
									?>
									</td>
									</tr>
								</table>
							<?php endif; ?>
						
					</td>
				</tr>	
				</table>			
			
			
			<?php	
				}	
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
<script> 
					jQuery(window).load(function() {
					$('#goi_y').slideUp(100);
					$('#goi_y').show();
					}
					</script>
</html>
