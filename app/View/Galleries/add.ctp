<div class="galleries form">
	<?php echo $this->Form->create('Gallery');?>
		<fieldset>
	 		<legend>Add Gallery</legend>
		<?php
			echo $this->Form->input('name');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>