<?php
	App::uses('Xml', 'Utility');
	$comments = array('document' => $comments);
	$xmlObject = Xml::fromArray( array('comments' => $comments), array('format' => 'attribute'));
	echo $xmlObject->asXML();
?>