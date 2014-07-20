<?php
	App::uses('Xml', 'Utility');
	$galleries = array('document' => $galleries);
	$xmlObject = Xml::fromArray( array('galleries' => $galleries), array('format' => 'attribute'));
	echo $xmlObject->asXML();
?>