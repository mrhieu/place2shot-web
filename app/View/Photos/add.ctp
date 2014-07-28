<!DOCTYPE html>
    <html>
    <head>
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
	  #picture{
	  text-align:center;
	  }
#img_upload{
width:600px;
height:400px;}	  
#cl {
        height: 100px;
		width:100px;
		background-color:yellow;
        margin: 0px;
        padding: 0px
      }
#map{
height:500px;
width:400px;
}
    </style>
    </head>

    <body>
<div id='content'>
	<div id="picture">
	<?php
		echo $this->html->image('images/demo.jpg',array('id'=>'img_upload'));
	?>
	
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
	<div id="cl"></div>
	<div id='info_img'>
	
		<table id="img_profile" border="1" cellspacing="20px" cellpadding="0">
			<tr>
				<td><h4 id='basic'>BASIC</h4></td>
				<td><h4 id='exif_file'>EXIF</h4></td>
				<td><h4 id='location_map'>MAP</h4></td>
			</tr>
			<tr>
				<td>
				basic2
				</td>
				
				<td class="exif_info">
					<table class="detail_exif">
					
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
						<td>Shutter Peed</td>	
						<td>	
							<?php 
											echo $this->Form->input('shutter_peed',array(
												'type'=>'text',
												'id'=>'shutter_peed'
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
				
				<td>		<!--MAP -->
					 <div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-1 control-label">Location:</label>

							<div class="col-sm-5"><input type="text" class="form-control" id="us3-address"/></div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">Radius:</label>

							<div class="col-sm-2"><input type="text" class="form-control" id="us3-radius"/></div>
						</div>
						<div id="us3" style="width: 550px; height: 400px;"></div>
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix"></div>
					</div>
				</td>
			</tr>			 															
	<div><!--END INFO IMG-->
					<p>Title</p>
				<?php 
					echo $this->Form->input('title',array(
						'type'=>'text',
						'id'=>false
					));
				?>
				<p>Decription</p>
				<?php
					echo $this->Form->textarea('description');
					
				?>
            	<?= $this->Form->input('user_id', array(
					 'label' => __d('Photo', 'User'),
					 'autocomplete' => 'off',
					 'value' => $current_user,
					 'type' => 'hidden'
					// 'type' => 'text'
					 ))
				?>
			<?php 
					echo $this->Form->end('SAVE');
				?>
		</table>
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
			$('#camera_model').val(exifObject.Make);
			$('#lens').val(exifObject.Model);
			$('#focal_length').val(exifObject.Contrast);
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
		$("#cl").click(function(){					
		if(document.getElementById("longitude").value !=''){
		$(".form-group").hide();
		$(".m-t-small").hide();
		initialize();
		google.maps.event.addDomListener(window, 'load', initialize);
		}
		else{
			$('#us3').locationpicker({
            location: {latitude: 21.033333, longitude: 105.85000000000002},
            radius: 300,
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

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#file").change(function(){
				readURL(this);
			});
		</script>

</div>
    </body>
    </html>