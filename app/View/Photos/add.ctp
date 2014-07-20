<?=$this->element('ajax_calendar')?>

<div class="posts form hero-unit" style="width: 300px; margin-right: auto ; margin-left: auto; height: 500px;" >
	<?=$this->Form->create('Photo', array('type' => 'file'))?>
		<fieldset>
			<legend><?= __d('Photo', 'Upload')?></legend>
			<?= $this->Form->input('gallery_id', array(
				'label' => __d('Photo', 'Gallery'),
				'autocomplete' => 'off'
				)
			)?>
			<?= $this->Form->input('title', array(
				'label' => __d('Photo', 'Title'),
				'autocomplete' => 'off'
				)
			)?>
			<?= $this->Form->input('img_file', array(
				'label' => __d('Photo', 'Image'),
				'autocomplete' => 'off',
				'type' => 'file',
				)
			)?>
			<?= $this->Form->input('description', array(
				'label' => __d('Photo', 'Description'),
				'type' => 'text',
				'autocomplete' => 'off'
				)
			)?>
		</fieldset>
	<?=$this->Form->end(__('Submit'))?>
</div>

<!-- <div class="photos form">
	<?php echo $this->Form->create('Photo', array('type' => 'file'));?>
		<fieldset>
			<legend>Add Photo</legend>
		<?php
			echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $current_user));
			echo $this->Form->input('gallery_id');
			echo $this->Form->input('title');
			echo $this->Form->input('img_file', array('type' => 'file'));
			echo $this->Form->input('description');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?> 
</div>
<div class="actions">
	<h3>Actions</h3>
		<ul>
	    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
			<?php if($current_user['roles' ] == 'admin'): ?>
		    	<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		        <li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	        <?php endif; ?>
				<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		        <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		
	    </ul>
</div> -->