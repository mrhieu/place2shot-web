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
		 
		 <script>
		 function initialize() {
				
					var l1=document.getElementById("latitude").value;
					var l2=document.getElementById("longitude").value;
					var myLatlng = new google.maps.LatLng(l1,l2);
					var mapOptions = {
					zoom: 14,
					center: myLatlng
					}
				  var map = new google.maps.Map(document.getElementById('us3'), mapOptions);

				  var marker = new google.maps.Marker({
					  position: myLatlng,
					  map: map,
					  title: 'Hello World!'
				  });
				}				
		</script>	
		

	  <style>
    </style>

	<div id="picture">
		<table id="have_image" class="display-image" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="image_upload" id="1234">
				<?php
					echo $this->html->image('image/winter-street-lights-portrait-beauty-girl.jpg',array('id'=>'img_upload','height'=>'540'));
				?>
			</tr>
		  <tr>
			<td class="choose">
				<div id="myfileupload">
					<?php
						echo $this->Form->create('Photo',array(
									'inputDefaults' => array(
										'label' => false),														
										'type' => 'file',
						));
					?>		
						
					<?php 
						echo $this->Form->input('img_file',array(
							'type'=>'file',
							'id'=>'file',
							
						));
					?>
				</div>
			</td>
			</tr>
		</table>
	</div>	
	
	
	
	
	<div id='profile-photos'>
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
						<td>Latitude</td>
						<td>
						<?php 
							echo $this->Form->input('latitude',array(
								'type'=>'text',
								'id'=>'latitude'
							));
						?>
						</td>
					
					</tr>
					<tr>
						<td>Longitude</td>
							
						<td>
							<?php 
									echo $this->Form->input('longitude',array(
										'type'=>'text',
										'id'=>'longitude'
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
					</table>
				</td>
				
				<td rowspan="3">		<!--MAP -->
					 <div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-1 control-label">Location:</label>

							<div class="col-sm-5"><input type="text" class="form-control" id="us3-address"/></div>
						</div>
						
						<div id="us3" style="width: 400px; height: 200px;"></div>
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix"></div>
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
<!--END INFO IMG-->	
			<tr>
				<td colspan="3">
					<?= $this->Form->input('user_id', array(
						  'label' => __d('Photo', 'User'),
						  'autocomplete' => 'off',
						  'value' => $current_user,
						  'type' => 'hidden'
						  ))
						?>
				<div class="class_button" >
				<table   class="load_and_save" cellpadding="0" cellspacing="5">
					<tr>
						<td>
						<button id="cl1" type="button">continue</button>
						</td>
						<td>
							<?php 
							echo $this->Form->end('SAVE');
							?>
						</td>
						<?php
							echo $this->html->image('icon/warring.png',array('id'=>'clik_map'));
						?>
					</tr>
				</table>
				</div>
				</td>
			</tr>
		</table>
					
</div>
	  <script type="text/javascript">
        var someCallback = function(exifObject) {

			var l1=exifObject.GPSLatitude;
			var l2=exifObject.GPSLongitude;
			var strLatRef = exifObject.GPSLatitudeRef || "N";  
			var strLongRef = exifObject.GPSLongitudeRef || "W"; 
			var lati=(l1[0]+l1[1]/60+l1[2]/3600)*(strLatRef == "N" ? 1 : -1);  
			var longi=(l2[0]+l2[1]/60+l2[2]/3600)* (strLongRef == "W" ? -1 : 1);  
			$('#latitude').val(lati);
			$('#longitude').val(longi);
            // Uncomment the line below to examine the
            // EXIF object in console to read other values
            //console.log(exifObject);
			$('#camera_model').val(exifObject.Model);
			$('#lens').val(exifObject.MaxApertureValue);
			$('#focal_length').val(exifObject.FocalLength);
			$('#shutter_speed').val(exifObject.ShutterSpeedValue);
			$('#aperture').val(exifObject.ApertureValue);
			$('#iso').val(exifObject.ISOSpeedRatings);
			$('#taken').val(exifObject.DateTimeOriginal);
			document.getElementById("1234").innerHTML='<img id="img_upload" src="" />';
			var width_img=exifObject.PixelXDimension;
			var height_img=exifObject.PixelYDimension;
			if(width_img/height_img<1200/540){
				wid=540*width_img/height_img;
				document.getElementById('img_upload').width=wid;
				document.getElementById('img_upload').height=540;
			}
			else {
				hgt=1200*height_img/width_img;
				document.getElementById('img_upload').height=hgt;
				document.getElementById('img_upload').width=1200;
			}
			
        }

      try {
        $('#file').change(function() {
            $(this).fileExif(someCallback);
        });
      }
      catch (e) {
        alert(e);
      }
	
 
    </script>
	
 	 	 
	 
	 
	<script>
		$("#cl1").click(function(){					
		if(document.getElementById("longitude").value !=''){
		$('#clik_map').hide();
		$(".form-group").hide();
		$(".m-t-small").hide();
		initialize();
		google.maps.event.addDomListener(window, 'load', initialize);
		}
		else{
			$('#us3').locationpicker({
            location: {latitude: 21.033333, longitude: 105.85000000000002},
            radius: 0,
            inputBinding: {
                latitudeInput: $('#latitude'),
                longitudeInput: $('#longitude'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
               
            }
        });
		
		}

	});
			
	</script>	
		  
		   
	  <script>
			function readURL(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#img_upload').attr('src', e.target.result);
					}
					
			$('#clik_map').show();
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#file").change(function(){
				readURL(this);
			});
		</script>

</div>