<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<?php
	echo $this->html->css("view_detail");
?>
	<script>
		 function initialize() {
				
					var l1=document.getElementById("latitude").value;
					var l2=document.getElementById("longitude").value;
					var myLatlng = new google.maps.LatLng(l1,l2);
					var mapOptions = {
					zoom: 14,
					center: myLatlng
					}
				  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

				  var marker = new google.maps.Marker({
					  position: myLatlng,
					  map: map,
					  title: 'Hello World!'
				  });
				}
				
		</script>	
<div id="account">
	<table class="acc_info" cellpadding="10" cellspacing="10">
		<td	class="avar" >
			<div class="avar_acc" style="background-image:url(<?php echo $this->webroot; ?>img/uploads/avatas/thumb/small/<?php echo $user['User']['avata']?> );display:block;">
			</div>
		</td>
		
		<td class="name_acc">
			<table>
				<tr>
					<td>
						Pictrue's Title
					</td>
				</tr>
				<tr>
					<td>
						Name acc
					</td>
				</tr>
			</table>
		</td>
	</table>
</div>
<div id="photo">

	<?php
		echo $this->html->image('uploads/images'.'/'.$photo['Photo']['img_file'],array('class'=>'image'));
	?>

  
</div>
<div id="details">
	<table class="details_img" cellpadding="10" cellspacing="25" border="0">
	<tr>

		<td id="info">
			
			<table cellpadding="1" cellspacing="10">
				<tr>
					<h3>DETAIL</h3>
				</tr>
				<tr>
					<td>
						Category
					</td>
					<td>
						<?php
							echo  $photo['Gallery']['name'];
						?>
					</td>
				</tr>
				<tr>
					<td>
						Camera
					</td>
					<td>
						<?php
							echo $photo['Photo']['camera'];
						?>
					</td>
				</tr>
				<tr>
					<td>
						Lens
					</td>
					<td>
						<?php
						echo $photo['Photo']['lens'];
						?>
					</td>
				</tr>
				<tr>
					<td>
						Focal Length
					</td>
					<td>
						<?php
						echo $photo['Photo']['focal_length'];
						?>
					</td>
				</tr>
				<tr>
					<td>
						Shutter Peed
					</td>
					<td>
						<?php
						echo $photo['Photo']['shutter_peed'];
						?>
					</td>
				</tr>
				<tr>
					<td>
						Aperture
					</td>
					<td>
						<?php
						echo $photo['Photo']['aperture'];
						?>
					</td>
				</tr>
				<tr>
					<td>
					ISO
					</td>
					<td>
						<?php
							echo $photo['Photo']['iso'];
						?>
					</td>
				</tr>
			</table>
			
		</td>
				<td id="map">
		
		
		</td>
	</tr>
		
		
	</table>
</div>
<?php
	echo $this->Form->input('aa', array('id'=>'latitude','class'=>"user_id",'type'=>'hidden', 'value' => $photo['Photo']['latitude']));
	echo $this->Form->input('aaa', array('id'=>'longitude','class'=>"user_id",'type'=>'hidden', 'value' => $photo['Photo']['longitude']));
?>

<div id="comment">
	<?php echo $this->Form->create('Comment');?>                                           			
		<?php
			echo $this->Form->input('Comment.user_id', array('class'=>"user_id",'type' => 'hidden', 'value' => $current_user));
			echo $this->Form->input('Comment.photo_id', array('class'=>'photo_id','type' => 'hidden', 'value' => $photo['Photo']['id']));
		?>
		<div class="img_acc">
		
		</div>
		<div id="comment_text">		
			<?php	
				echo $this->Form->input('Comment.comment', array('class'=>'comment','label' => false));
				
			?>
		</div>
		
		<div id="post_cmt">
		<?php echo $this->Form->end(__('Post Comment',true));?>
		</div>
</div>



<div class="related">
	<?php echo $this->Form->create('Comment');?>
	<?php if (!empty($photo['Comment'])):?>
		<table cellpadding = "0" cellspacing = "0" class="content_cmt">
			<td class="img_acc">
				
			</td>
			
			<td class="info_cmt">
				<table>
				<tr>
					<td>
						User name
					</td>
				</tr>
				<tr>
					<td>
						Thoi gian
					</td>					
				</tr>
				</table>
			</td>
		<td	class="text_cmt">
			Noi dung cmt
		</td>	
			<!--
			<tr>
				<?php if($current_user['roles' ] == 'admin'): ?>
					<th>Id</th>
				<?php endif; ?>
                	<th>User</th>
					<th>Comment</th>
					<th>Created</th>
					<th>Modified</th>
					<th class="actions">Actions</th>
			</tr>
	<?php
		$i = 0;
		foreach ($photo['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
		<tr<?php echo $class;?>>
			<?php if($current_user['roles' ] == 'admin'): ?>
				<td><?php echo $comment['id'];?></td>
			<?php endif; ?>
            	<td><?php echo $this->Html->link($comment['user_id'], array('controller' => 'users', 'action' => 'view', $comment['user_id'])); ?>
		</td>
				<td><?php echo $comment['comment'];?></td>
				<td><?php echo $comment['created'];?></td>
				<td><?php echo $comment['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
				</td>
		</tr>
		<?php endforeach; ?> -->
		</table>
		
		<?php endif; ?>
	<?php echo $this->Form->end();?>
	
		<script>
		if(document.getElementById("latitude").value!=''){
			
		initialize();		
		google.maps.event.addDomListener(window, 'load', initialize);	
		}
	</script>
	
</div>







