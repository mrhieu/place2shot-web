
<?php echo $this->Html->css("upload.css"); ?>
<?php echo $this->html->script("jquery/upload/jpegmeta.js");?>
<?php echo $this->html->script("jquery/upload/demo.js"); ?>
<?php echo $this->html->script("jquery/upload/jquery.min.js"); ?>
<?php echo $this->html->script("jquery/upload/map.js"); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<div id="dropbox">
  <div id="status"></div> <!--warring: not delete !-->
	<div id="view-photos">
		<table id="have_image" border="0" class="display-image" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="image_upload" >
			<img id="thumbimage" height="540"  src="<?php echo $this->webroot; ?>img/image/winter-street-lights-portrait-beauty-girl.jpg" /></td>
			</tr>
		  <tr>
			<td class="choose">
				<div id="myfileupload">
               
				<?php
					echo $this->Form->create('Photo',array(
						'inputDefaults' => array(
							'label' => false),
						//	'div' => false,
							//'id'=>'form_upload',
							'type' => 'file'
						//)
					))
				?>
				<?php 
					echo $this->Form->input('img_file',array(
						'type'=>'file',
						'id'=>'uploadfile'
						//'onchange'=>'readURL(this);'
					))
				?>
				</div>
			</td>
			</tr>
		</table>
	</div>
	
	<div id="profile-photos">	
		<table class="image_profile" border="0" cellspacing="20px" cellpadding="0">
		
			<tr>
				<td class="title_prf">Basic</td>
				<td class="title_prf">Exif</td>
				<td class="title_prf">Location </td>
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
				<table class="exif" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td>Camera</td>
					<td>
						<?php 
							echo $this->Form->input('camera',array(
								'type'=>'text',
								'id'=>'camera'
							));
						?>
					</td>
				  </tr>
				  <tr>
					<td>Lens</td>
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
					<td>Aperture</td>
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
				</table>
			</td>
			<td id="map" rowspan="3" >
				<img id="default_map" src="../img/images/map.jpg" width=373 height=210 />
					<?php 
                       	echo $this->Form->input('latitude',array(
                        	'id'=>'latitude',
                        	//'type'=>'hidden'
                       	));
                    ?>
                    <?php 
                       	echo $this->Form->input('longtitude',array(
                        	'id'=>'longtitude',
                        	//'type'=>'hidden'
                       ));
                    ?>
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
		  <tr>
		  	<td class="save_image">
				<?php 
					echo $this->Form->end('SAVE');
				?>
			</td>
		  </tr>
		</table>
	
	</div>
</div>
