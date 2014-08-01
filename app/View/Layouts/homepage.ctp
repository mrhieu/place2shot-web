
<?php
	echo $this->html->css("page");
?>
<?php 
	$mang=array("cover.jpg","cover3.jpg","cover2.jpg");
	$rand=array_rand($mang);
?>

<div id="cover_page" style="background-image:url(/place2shot-web/img/image/<?php echo $mang[$rand]; ?>)">	
	<div id="banner">
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

				  </tr>
				</table>
			</td>
			<td class="search">
				<table class="search"  cellspacing="0" cellpadding="0">
					
				  <tr>
					<td class="text_search">
						
						<div id="goi_y">
							<table border="0" cellspacing="2" cellpadding="0">
								<tr>
									<td class="goi_y_title">tìm kiếm tên ảnh</td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(1)">.....</button></td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(2)">.....</button></td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(3)">.....</button></td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(4)">.....</button></td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(5)">.....</button></td>
								</tr>
								<tr>
									<td class="goi_y_val"><button type="button" onclick="get_gy(6)">.....</button></td>
								</tr>
							</table>
						</div>
					<td class="logo_search">
						
					</td>
				  </tr>
				</form>
				</table>
			</td>
			<td class="user">
				<table class="user" width="200"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="upload">
						<?php
							echo $this->Html->link(
								$this->Html->image('icon/upload.png').' Upload',
								array('controller'=>'photos','action'=>'add', $current_user['id']),
								array('escape' => false)
							);
						?>
					</td>
						<?php echo '<td class="register">';?>
								<?php echo $this->Html->link('Register', array('controller'=>'users','action'=>'add'));?>
						<?php echo '</td>';?>
						<?php echo '<td class="Login">';?>
							<?php echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));?>
						<?php echo '</td>';?>
				  </tr>
				</table>

			</td>
		  </tr>
		</table>
		
			
					
					
				 


			</div>
	
	</div>
