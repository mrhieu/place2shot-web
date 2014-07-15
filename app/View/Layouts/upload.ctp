<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="dropbox" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->Html->css("banner.css"); ?>
<?php echo $this->Html->css("upload.css"); ?>
<script <?php echo $this->html->js("jpegmeta.js");?>></script>
<script <?php echo $this->html->js("demo.js"); ?>></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
<title>Untitled Document</title>
<style type="text/css">
/*	RESET CSS	*/
*{
	margin:0px;
	padding:0px;
}
table.choose_and_remove{
	width:200px;
	margin:auto;
}
table.choose_and_remove tr td{
	width:100px;
}
.Choicefile
    {
        display:block;
        background:#0877D8;
        border:1px solid #fff;
        color:#fff;
        width:100px;
        text-align:center;
        text-decoration:none;
        cursor:pointer;
        padding:5px 0px;
		margin:auto;
    }
    #uploadfile,.removeimg
    {
       display:none;
    }
    #thumbbox
    {
      position:relative;
      width:100px;
    }
	.removeimg
    {
     	display:block;
        background:#0877D8;
        border:1px solid #fff;
        color:#fff;
        width:100px;
        text-align:center;
        text-decoration:none;
        cursor:pointer;
        padding:5px 0px;
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
				$("#not_image").hide();
				$("#have_image").show();
                $("#thumbimage").show();
            }
            else {
                $("#thumbimage").attr('src', input.value);
                $("#thumbimage").show();
            }
            $('.filename').text($("#uploadfile").val());
            $('.Choicefile').css('background', '#c4c4c4');
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
				$("#not_image").show();
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
    zoom: 16,
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
	<div id="status"></div>
		<table id="have_image" style="display:none" class="display-image" border="1" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="image_upload" colspan="10"><img id="thumbimage" height="450" style="max-width:1200px;"  /></td>
			</tr>
		  <tr>
			<td class="image-back"><button name="next" value="next" style="width:40px; height:40px">next</button></td>
			<td class="image-1">&nbsp;</td>
			<td class="image-2">&nbsp;</td>
			<td class="image-3">&nbsp;</td>
			<td class="image-4">&nbsp;</td>
			<td class="image-5">&nbsp;</td>
			<td class="image-6">&nbsp;</td>
			<td class="image-7">&nbsp;</td>
			<td class="image-8">&nbsp;</td>
			<td class="image-next"><button name="next" value="next" style="width:40px; height:40px">next</button></td>
		  </tr>
		  <tr>
			<td colspan="10">
				<div id="myfileupload">
				<form id="form_upload" action="javascript:void(0)">
					<input type="file" id="uploadfile" onchange="readURL(this);" />
				</form>
				</div>
				 <table class="choose_and_remove" cellpadding="0" cellspacing="0" border="1">
				 	<tr>
						<td class="choose"><a href="javascript:" class="Choicefile">Chọn file</a></td>
						<td class="remove"><a class="removeimg" href="upload.html" >cancel</a></td>
					<p style="clear:both"></p>
				 	</tr>
				 </table>
			</td>
			</tr>
		</table>
		
		<table id="not_image" class="upload_button"  width="500" border="1" cellspacing="0" cellpadding="0">
		<form action="xuly.php" id="form_upload" method="post" enctype="multipart/form-data">
		  <tr>
			<td class="title">Drag photos from your computer in here</td>
		  </tr>
		  <tr>
			<td class="choose_photos">
				<div id="myfileupload">
					<input type="file" id="uploadfile" onchange="readURL(this);" />
				</div>
				 <div id="boxchoice">
					<a href="javascript:" class="Choicefile">Chọn file</a>
					<p style="clear:both"></p>
				 </div>
			</td>
		  </tr>
		  <tr>
			<td class="text_other">or</td>
		  </tr>
		  <tr>
			<td class="import">&nbsp;</td>
		  </tr>
		  <tr>
			<td class="text_other">from services such as</td>
		  </tr>
		 
		</table>
		
		
		<table class="image_profile" border="1" cellspacing="0" cellpadding="0">
		
			<tr>
				<td>Basic</td>
				<td>Exif</td>
				<td>Location <button type="button" name="load_map" value="load"  onclick="initialize()" >load map</button></td>
			</tr>
		  <tr>
			<td class="basic_title"><input type="text" name="title" /></td>
			<td rowspan="2">
				<table class="exif" border="1" cellspacing="0" cellpadding="0">
				  <tr>
					<td>Camera</td>
					<td><input id="camera" type="text" name="camera" /></td>
				  </tr>
				  <tr>
					<td>Lens</td>
					<td><input id="lens" type="text" name="lens" /></td>
				  </tr>
				  <tr>
					<td>Focal Length</td>
					<td><input id="focal_length" type="text" name="focal_length" /></td>
				  </tr>
				  <tr>
					<td>Shutter Speed</td>
					<td><input id="shutter_speed" type="text" name="shutter_speed" /></td>
				  </tr>
				  <tr>
					<td>Aperture</td>
					<td><input id="aperture" type="text" name="aperture" /></td>
				  </tr>
				  <tr>
					<td>ISO</td>
					<td><input id="iso" type="text" name="iso" /></td>
				  </tr>
				  <tr>
					<td>Taken</td>
					<td><input id="taken" type="text" name="taken" /></td>
				  </tr>
				</table>
			</td>
			<td id="map" rowspan="2">
				<input type="text" id="latitude" name="latitude"  style="display:none"/>
				<input type="text" id="longtitude" name="longtitude" style="display:none"/>
			</td>
		  </tr>
		  <tr>
			<td class="basic_decription">&nbsp;</td>
		  </tr>
		  <tr>
		  	<td><input type="submit" name="submit" value="Save" /></td>
		  </tr>
		  </form>
		</table>
		
		
	    </td>
		  </tr>
		  <tr class="footer">
			<td>&nbsp;</td>
		  </tr>
		</table>
		<?php
function background_size_list1($image,$size){
	switch($size){
		case 'ngang':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<880/300) return 'background-size: 980px auto;' ;
			else return 'background-size: auto 300px;';break;
		case 'vuong':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1) return 'background-size: 300px auto;' ;
			else return 'background-size: auto 300px;';break;
		case 'dung':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<300/620) return 'background-size: 300px auto;' ;
			else return 'background-size: auto 620px;';break;
	}
}
function background_size_list2($image,$size){
	switch($size){
		case 'ngang':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1010/580) return 'background-size: 1000px auto;' ;
			else return 'background-size: auto 580px;';break;
		case 'vuong':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1) return 'background-size: 180px auto;' ;
			else return 'background-size: auto 180px;';break;
	}
}
function background_size_list3($image){
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1200/580) return 'background-size: 1200px auto;' ;
			else return 'background-size: auto 580px;';break;
}
?>
</body>
</html>
