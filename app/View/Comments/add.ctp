<div class="comments form">
	<?php echo $this->Form->create('Comment', array('type' => 'get'));?>
		<fieldset>
			<legend>Add Comment</legend>
		<?php
			echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $current_user));
			echo $this->Form->input('photo_id');
			echo $this->Form->input('comment');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>