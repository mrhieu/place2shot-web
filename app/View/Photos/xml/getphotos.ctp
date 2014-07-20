<?php
	App::uses('Xml', 'Utility');
	$photos = array('document' => $photos);
	$xmlObject = Xml::fromArray( array('photos' => $photos), array('format' => 'attribute'));
	echo $xmlObject->asXML();
?>