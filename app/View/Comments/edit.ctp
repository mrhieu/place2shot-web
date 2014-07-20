<div class="comments form">
	<?php echo $this->Form->create('Comment');?>
		<fieldset>
			<legend>Edit Comment</legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('user_id');
			echo $this->Form->input('photo_id');
			echo $this->Form->input('comment');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Comment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Comment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Phots', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>