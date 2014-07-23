<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="dropbox" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->Html->css("banner.css"); ?>
<?php echo $this->Html->css("upload.css"); ?>
<?php echo $this->html->script("jpegmeta.js");?>
<?php echo $this->html->script("demo.js"); ?>
<?php echo $this->html->script("jquery.min.js"); ?>
<?php echo $this->html->script("vn.eten.web.AjaxUploader.js"); ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
<title>Untitled Document</title>
<style type="text/css">
/*	RESET CSS	*/
*{
	margin:0px;
	padding:0px;
}

</style>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vn.eten.web.AjaxUploader.js" type="text/javascript"></script>
    <script type="text/javascript">
        function readURL(input,thumbimage) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#thumbimage").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
				$("#have_image").show();
                $("#thumbimage").show();
				$("#default_image").hide();
            }
            else {
                $("#thumbimage").attr('src', input.value);
                $("#thumbimage").show();
            }
            $('.filename').text($("#uploadfile").val());
            $('.Choicefile').css('background', '#c4c4c4');
			$('.removeimg').css('background', '#0877D8');
            $('.Choicefile').css('cursor', 'default');
            $(".Choicefile").unbind('click');
            $(".removeimg").show();
        }
        $(document).ready(function () {
            $(".Choicefile").bind('click', function () {
                $("#uploadfile").click();
                
            });
            $(".removeimg").click(function () {
                $("#thumbimage").attr('src', '').hide();
                $("#myfileupload").html('<input type="file" id="uploadfile" onchange="readURL(this);" />');
                $(".removeimg").hide();
				$("#have_image").hide();
                $(".Choicefile").bind('click', function () {
                    $("#uploadfile").click();
                });
                $('.Choicefile').css('background','#0877D8');
                $('.Choicefile').css('cursor', 'pointer');
                $(".filename").text("");
            });
        });

var map;
function initialize() {
	var latitude=document.getElementById("latitude").value;
	var longtitude=document.getElementById("longtitude").value;
      var myLatlng = new google.maps.LatLng(latitude,longtitude);
      var myOptions = {
    zoom: 14,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("map"), myOptions); 
  // Biến text chứa nội dung sẽ được hiển thị
   var infowindow = new google.maps.InfoWindow(
    {
        size: new google.maps.Size(100,50),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:""
  });
}
    </script>

</head>

<body>
<table class="khung" cellspacing="0" cellpadding="0">
  <tr class="banner">
    <td>
		<table class="banner_tool" cellspacing="0" cellpadding="0">
		  <tr>
			<td>
				<table class="menu_banner"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="logo"><img src="images/logo.png"  /></td>
					<td class="discover"><img src="images/discover.png"  />Discover</td>
					<td class="buy"><img src="images/buy.png"  />Buy</td>
					<td class="upload"><img src="images/upload.png"  />Upload</td>
				  </tr>
				</table>
			</td>
			<td >
				<table class="search"  cellspacing="0" cellpadding="0">
				<form class="search" action="#" method="post">
				  <tr>
					<td class="text_search"><input type="text" name="search"  /></td>
					<td class="logo_search"><img src="images/search.png"  /></td>
				  </tr>
				</form>
				</table>
			</td>
			<td>
				<table class="user" width="200"  cellspacing="0" cellpadding="0">
				  <tr>
					<td class="sign_up"><img src="sign_up.png"  />Sign up</td>
					<td class="chose"><img src="chose"  /></td>
				  </tr>
				</table>

			</td>
		  </tr>
		</table>
	</td>
  </tr>
<!-- main -->
  <tr class="main">
    <td>
	<div id="status"></div> <!-- thẻ bắt buộc để lấy đc thông tin-->
	<div id="view-photos">
		<table id="have_image"  class="display-image" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="image_upload" >
			<img id="default_image" height="540" src="<?php echo $this->webroot; ?>img/image/winter-street-lights-portrait-beauty-girl.jpg"  />
			<img id="thumbimage" height="540"   /></td>
			</tr>
		  <tr>
			<td >
				<div id="myfileupload">
				<?php
					echo $this->Form->create('form_upload',array(
						'inputDefaults' => array(
							'label' => false,
							'div' => false,
							'id'=>'form_upload',
							'enctype' => 'multipart/form-data'
						)
					));
				?>
				<?php 
					echo $this->Form->input('img_file',array(
						'type'=>'file',
						'id'=>'uploadfile',
						'onchange'=>'readURL(this);'
					));
				?>
				</div>
				 <table class="choose_and_remove" cellpadding="20px" cellspacing="0">
				 	<tr>
						<td class="choose"><a href="javascript:" class="Choicefile">Choose photos</a></td>
						<td class="remove"><a class="removeimg" href="http://localhost/place2shot-web/photos/add" >cancel</a></td>
					<p style="clear:both"></p>
				 	</tr>
				 </table>
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
			<td class="basic_title">
			<p>Title</p>
				<?php 
					echo $this->Form->input('basic_title',array(
						'type'=>'text',
						'id'=>false
					));
				?>
			</td>
			<td rowspan="2">
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
			<td id="map" rowspan="2" onMouseover="if(document.getElementById('longtitude').value!='') initialize();">
				<img id="default_map" src="../img/images/map.jpg" width=373 height=210 />
				<input name="data[form_upload][latitude]" id="latitude" style="display:none" type="text"/>
				<input name="data[form_upload][longtitude]" id="longtitude" style="display:none" type="text"/>
			</td>
		  </tr>
		  <tr>
			<td class="basic_decription">
				<p>Decription</p>
				<?php
					echo $this->Form->textarea('notes');
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
		
	    </td>
		  </tr>
		  <tr class="footer">
			<td>&nbsp;</td>
		  </tr>
		</table>
</body>
</html>
