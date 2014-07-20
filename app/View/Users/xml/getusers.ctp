<?php
	App::uses('Xml', 'Utility');
	$users = array('document' => $users);
	$xmlObject = Xml::fromArray( array('users' => $users), array('format' => 'tags'));
	echo $xmlObject->asXML();
?>