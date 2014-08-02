	<?php echo $this->Html->css("upload.css"); ?>
	<?php echo $this->html->script("jquery/upload/jquery-1.7.1.js");?>
	<?php echo $this->html->script("jquery/upload/jquery.exif.js");?>
	<?php echo $this->html->script("jquery/upload/locationpicker.jquery.js");?>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
		<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
		 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>		
					<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
					<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
					<!-- -->
					<!-- Location picker -->
					<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<?= $this->element('ajax_calendar')?>	

	<script>
		 function initialize() {
				
					var l1=document.getElementById("latitude").value;
					var l2=document.getElementById("longitude").value;
					var myLatlng = new google.maps.LatLng(l1,l2);
					var mapOptions = {
					zoom: 7,
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


<style>

table.have_image, table.details{
	width:1200px;
	margin:auto;
	text-align:center;
}
	
	td.image_upload img{
	max-width:800px;
	max-height:500px;
	}
	td.cancel{
	margin-top:20px;
	margin-right:5px;
	float:left;
	height:30px;
	margin-left:1000px;
	margin-top:20px;
	padding-top:10px;
	width:80px;
	height:30px;
	background:#00FFFF;
	cursor: pointer;
	border:none;
	border-radius:4px;
	}
	td.del{
	margin-top:20px;
	padding-top:10px;
	float:left;
	width:80px;
	height:30px;
	background:#00FFFF;
	cursor: pointer;
	border:none;
	border-radius:4px;
	}
	td.del a,td.cancel a{
	text-decoration:none;
	color:#FFFFFF;
	font-size:17px;
	font-weight:bold;
	}
	.button input{
	width:150px;
	height:30px;
	border:none;
	border-radius:3px;
	font-size:17px;
	font-weight:bold;
	color:#FFFFFF;
	background:#00FFFF;
	}
</style>

<div id="picture">
	<table class="have_image" border="0" cellpadding="0" cellspacing="15">
		<tr>
			<td	class="image_upload" >
			<?php echo $this->html->image('uploads/images/'.$photo['Photo']['img_file'],array("alt"=>''));?>
			
			</td>
		</tr>
		<tr>
		<td class="cancel" width="100" height="50">
			<?php	echo $this->Form->postLink(
										'CANCEL',
										array('controller' =>'users','action' => 'view',$current_user['id']),
										array('class' => 'btn1','escape'=>false)										
									)
									?>
		</td>
			<td class="del">
				<?php	echo $this->Form->postLink(
										'DELETE',
										array('controller' =>'photos','action' => 'delete', $photo['Photo']['id'], $current_user['id']),
										array('class' => 'btn1','escape'=>false),
										__('Are you sure you want to delete: %s?', $ten[$j].' '.$diachi[$j])
									)
									?>
			</td>
		</tr>
	</table>
</div><!-- END IMAGE -->

<div id='profile-photos'>
	<?= $this->Form->create('Photo',array('inputDefaults' => array(
										'label' => false),														
										'type' => 'file',
						))?>
	<table class="img_profile"  cellspacing="10px" cellpadding="0">
			<tr>
				<td class="title_prf">BASIC</td>
				<td class="title_prf">EXIF</td>
				<td class="title_prf">MAP</td>
			</tr>
			<tr>
				<td class="gallery">
					<p>Gallery</p>
					<?php 
						echo $this->Form->input('gallery_id', array(
								//'label' => __d('Photo', 'Gallery'),
								'autocomplete' => 'off'
								)
							   );
					?>
				</td>
				<td rowspan="3">
					<table class="detail_exif" cellspacing="0px" cellpadding="0">
					
					<tr>
						<td>Camera</td>
						<td>	
							<?php 
								echo $this->Form->input('camera',array(
										'type'=>'text',
										'id'=>'camera_model'
											));
										?>
						</td>
					</tr>
					
					<tr>
						<td>Len</td>
						<td>
							<?php 
									echo $this->Form->input('lens',array(
										'type'=>'text',
										'id'=>'lens'
									));
								?>
						</td>		
					</tr>
					<tr>
						<td>Focal Length</td>
						<td>
							<?php 
								echo $this->Form->input('focal_length',array(
									'type'=>'text',
									'id'=>'focal_length'
								));
							?>
						</td>
					</tr>		
					<tr>
						<td>Shutter Speed</td>	
						<td>	
							<?php 
											echo $this->Form->input('shutter_speed',array(
												'type'=>'text',
												'id'=>'shutter_speed'
											));
										?>
						</td>
					</tr>
						
					<tr>
						<td>Apperture</td>	
						<td>
							<?php 
								echo $this->Form->input('aperture',array(
									'type'=>'text',
									'id'=>'aperture'
								));
							?>	
						</td>
					</tr>	
					<tr>
						<td>ISO</td>
						<td>
						<?php 
							echo $this->Form->input('iso',array(
											'type'=>'text',
											'id'=>'iso'
										));
									?>	
						</td>
						
						</tr>
						<tr>
							<td>Taken</td>
							<td>
								<?php 
									echo $this->Form->input('taken',array(
										'type'=>'text',
										'id'=>'taken'
									));
								?>	
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
						<?php 
							echo $this->Form->input('latitude',array(
								'type'=>'hidden',
								'id'=>'latitude'
							));
						?>
						</td>
					
					</tr>
					<tr>
						<td></td>
							
						<td>
							<?php 
									echo $this->Form->input('longitude',array(
										'type'=>'hidden',
										'id'=>'longitude'
									));
								?>
						</td>
					</tr>
					</table>
				</td>
				
				<td rowspan="3">		<!--MAP -->
					 <div id="map">
						
					 </div>
				</td>
			</tr>
			<tr>
				<td class="basic_title">
				<p>Title</p>
					<?php 
						echo $this->Form->input('title',array(
							'type'=>'text',
							'id'=>false
						));
					?>
					<?= $this->Form->input('user_id', array(
						 'label' => __d('Photo', 'User'),
						 'autocomplete' => 'off',
						 'value' => $current_user,
						 'type' => 'hidden'
						// 'type' => 'text'
						 ))
					?>
				</td>
		  </tr>
		  <tr>
			<td class="basic_decription">
				<p>Decription</p>
				<?php
					echo $this->Form->textarea('description');
					
				?>
			</td>
		  </tr>	
			<tr >
				<td class="button">
				<?=$this->Form->end(__('SAVE CHANGE'))?>
				</td>
			</tr>
	</table>
	<script>
		if(document.getElementById("latitude").value!=''){
			
		initialize();		
		google.maps.event.addDomListener(window, 'load', initialize);	
		}
	</script>
</div>

<!--
<div class="posts form hero-unit" style="width: 300px; margin-right: auto ; margin-left: auto; height: 500px;" >
	<?= $this->Form->create('Photo',array('type' => 'file'))?>
		<fieldset>
			<legend><?= __d('Photo', 'Edit Photo')?></legend>
			<?= $this->Form->input('id')?>
			<?php if($current_user['roles' ] == 'admin'): ?>
			<?= $this->Form->input('user_id', array(
				'label' => __d('Photo', 'User'),
				'autocomplete' => 'off'
				)
			)?>
			<?php endif; ?>
			<?= $this->Form->input('gallery_id', array(
				'label' => __d('Photo', 'Gallery'),
				'autocomplete' => 'off'
				)
			)?>
			<?= $this->Form->input('title', array(
				'label' => __d('Photo', 'Title'),
				'autocomplete' => 'off'
				)
			)?>
			<?= $this->Form->input('img_file', array(
				'label' => __d('Photo', 'Image'),
				'autocomplete' => 'off',
				'type' => 'file',
				)
			)?>
			<?= $this->Form->input('description', array(
				'label' => __d('Photo', 'Description'),
				'type' => 'text',
				'autocomplete' => 'off'
				)
			)?>
			<?= $this->Form->input('img_file', array(
				'label' => __d('Photo', 'Camera'),
				'autocomplete' => 'off'
				)
			)?>
		</fieldset>
	<?=$this->Form->end(__('Submit'))?>
</div>
<!-- <div class="photos form" style="width: 300px; margin-right: auto ; margin-left: auto;">
	<?php echo $this->Form->create('Photo',array('type' => 'file'));?>
		<fieldset>
			<legend>Edit Photo</legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('user_id', array('type' => 'hidden'));
			echo $this->Form->input('gallery_id');
			echo $this->Form->input('title');
			echo $this->Form->input('img_file', array('type' => 'file'));
			echo $this->Form->input('description');

			echo $this->Form->input('Image.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));
				
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
		<ul>
	    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
			<?php if($current_user['roles' ] == 'admin'): ?>
		    	<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		        <li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	         <?php endif; ?>
		        <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Photo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Photo.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
</div> -->