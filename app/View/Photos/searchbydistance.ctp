<?php echo $this->html->css("searchbydistance"); ?>
<div onload="initialize()">	
<table class="search_ds" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">
					<?php
						echo $this->Form->create('Photo',array(
							'action' => 'searchbydistance'
							));
						
 						
					?>
					<?php echo $this->Form->input('distance', array(
									'div'=>'search_text',
									'label' => false,
									'id'=>'search_dis',
									'placeholder'=>'Search...',
									'autocomplete'=>'off',
									'list'=>'browsers'
									)); 
					?>
					<datalist id="browsers">
					  <option value="10km">
					  <option value="20km">
					  <option value="30km">
					  <option value="50km">
					  <option value="100km">
					</datalist>
					<?php echo $this->Form->input('latitude', array(
									'id'=>'latitude',
									'type'=>'hidden'
									)); 
					?>
					<?php echo $this->Form->input('longitude', array(
									'id'=>'longitude',
									'type'=>'hidden'
									)); 
					?>
					<?php
							//echo $this->Form->end('Search');
					?>
					</form>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<script type="text/javascript"> 
  var geocoder;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
	document.getElementById('latitude').value=lat;
	document.getElementById('longitude').value=lng;
}


  function initialize() {
    geocoder = new google.maps.Geocoder();
}

</script> 