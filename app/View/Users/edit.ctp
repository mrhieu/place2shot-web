
<?php
echo $this->Html->link(
					$this->Html->image("Image/img_site.jpg"),
					array('controller'=>'photos','controller'=>'photos','action'=>'view'),
					array('class' => 'image',"alt" => "Brownies",'escape' => false)
				);
?>