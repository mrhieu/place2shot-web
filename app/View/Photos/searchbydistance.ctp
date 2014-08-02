<div onload="initialize()">					
					<?php
						echo $this->Form->create('Photo',array(
							'action' => 'searchbydistance'
							));
						
 						
					?>
					<?php echo $this->Form->input('title', array(
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
									'id'=>'latitude'
									)); 
					?>
					<?php echo $this->Form->input('longitude', array(
									'id'=>'longitude'
									)); 
					?>
					<?php
							echo $this->Form->end('Search');
					?>
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