<div class="users form hero-unit" style="width: 400px; margin-right: auto ; margin-left: auto; height: 650px">
<?= $this->Form->create('User',array('type' => 'file'))?>
	<fieldset>
		<legend><?= __d('User', 'Upgrade')?></legend>
		<?= $this->Form->input('id')?>
		<?= $this->Form->input('username', array(
			'label' => __d('User', 'Username'),
			'autocomplete' => 'off'
			)
		)?>
		<?= $this->Form->input('password', array(
			'label' => __d('User', 'Password'),
			'autocomplete' => 'off'
			)
		)?>
		<?= $this->Form->input('password_confirm', array(
			'autocomplete' => 'off',
			'type' => 'password'
			)
		)?>
		<?= $this->Form->input('gender', array(
			'autocomplete' => 'off',
			'options' => array( 'male' => 'Male', 'female' => 'Female')
			)
		)?>
		<?= $this->Form->input('avata', array(
			'label' => __d('User', 'Avata'),
			'autocomplete' => 'off',
			'type' => 'file'
			)
		)?>
		<?= $this->Form->input('email', array(
			'label' => __d('User', 'Email'),
			'autocomplete' => 'off'
			)
		)?>
		<?php if($current_user['roles' ] == 'admin'): ?>
		<?= $this->Form->input('roles', array(
			'label' => __d('User', 'Roles'),
			'autocomplete' => 'off',
			'options' => array( 'regular' => 'regular', 'admin' => 'admin')
			)
		)?>
		<?php endif;
		?>
<?=$this->Form->end(__('Submit'))?>
</div>
<!-- <div class="users edit form">
	<?php echo $this->Form->create('User' ,array('type' => 'file'));?>
		<fieldset>
			<legend>Edit User</legend>
	       
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('password_confirm', array('type'=>'password'));
			echo $this->Form->input('email');
			echo $this->Form->input('avata', array('type' => 'file'));
			if($current_user['roles' ] == 'admin'){
				echo $this->Form->input('roles');
			}
			echo $this->Form->input('gender', array(
	            'options' => array( 'male' => 'Male', 'female' => 'Female')
	        ));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>        	<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
        <?php endif; ?>
			<li><?php echo $this->Html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Posts', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div> -->