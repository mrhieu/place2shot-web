<div class="actions">
	<h2><?php __('Your Dashboard');?></h2>

	<div id="dashboard_links">
		<ul>
			<li>Meeting topic</li>
			<li><?php echo $this->Html->link(__('Files', true), array('controller' => 'Collaterals', 'action' => 'index')); ?></li>
			<li>Favorited Files</li>
			<li>Contacts</li>
			<li><?php echo $this->Html->link(__('Notes', true), array('controller' => 'Posts', 'action' => 'index'));?></li>
			<li>Twitter</li>
		
	<!--#dashboard_links-->
	
	

	<?php if($current_user['roles'] == 'admin'): ?>
	
			
			
		      	<li><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Add User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('Post', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Add Groups', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul>
		</div><!--#admin_links-->
    <?php endif; ?>
	
</div><!--.dashboard_index-->