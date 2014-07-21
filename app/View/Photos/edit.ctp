<?= $this->element('ajax_calendar')?>	

<div class="posts form hero-unit" style="width: 300px; margin-right: auto ; margin-left: auto; height: 500px;" >
	<?= $this->Form->create('Photo',array('type' => 'file'))?>
		<fieldset>
			<legend><?= __d('Photo', 'Edit Photo')?></legend>
			<?= $this->Form->input('id')?>
			<?php if($current_user['roles' ] == 'admin'): ?>
			<?= $this->Form->input('user_id', array(
				'label' => __d('Photo', 'User'),
				'autocomplete' => 'off'
				)
			)?>
			<?php endif; ?>
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
<!-- <div class="photos form" style="width: 300px; margin-right: auto ; margin-left: auto;">
	<?php echo $this->Form->create('Photo',array('type' => 'file'));?>
		<fieldset>
			<legend>Edit Photo</legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('user_id', array('type' => 'hidden'));
			echo $this->Form->input('gallery_id');
			echo $this->Form->input('title');
			echo $this->Form->input('img_file', array('type' => 'file'));
			echo $this->Form->input('description');

			echo $this->Form->input('Image.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));
				
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
		        <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Photo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Photo.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
</div> -->