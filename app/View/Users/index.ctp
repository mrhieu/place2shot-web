<div class="actions" >
		<ul >
	    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "photos", "action" => "index")); ?> </li>
	    	<?php if($current_user['roles' ] == 'admin'): ?>
	    		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	        	<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	        <?php endif; ?>
	        	<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?></li>
				
				
		</ul>
</div> 

<div class="users index">
	<div>
		<ul>
			<li> </li>
			<li><h2><?= __d('User', 'Users')?></h2></li>
			<li><?= $this->Html->link(__d('User', 'New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary btn-mini'))?></li>
		</ul>
	</div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?= $this->Paginator->sort('id', __d('User', 'Id'))?></th>
			<th><?= $this->Paginator->sort('username', __d('User', 'Username'))?></th>
			<th><?= $this->Paginator->sort('name', __d('User', 'Name'))?></th>
			<th><?= $this->Paginator->sort('password', __d('User', 'Password'))?></th>
			<th><?= $this->Paginator->sort('avata', __d('User', 'Avata'))?></th>
			<th><?= $this->Paginator->sort('email', __d('User', 'Email'))?></th>
			<th><?= $this->Paginator->sort('gender', __d('User', 'Gender'))?></th>
			<th><?= $this->Paginator->sort('created', __d('User', 'Created'))?></th>
			<th><?= $this->Paginator->sort('modified', __d('User', 'Modified'))?></th>
			<th class="actions"><?= __('Actions')?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?= h($user['User']['id'])?>&nbsp;</td>
		<td><?= $this->Html->link($user['User']['name'], array('action' => 'view', $user['User']['id']))?>&nbsp;</td>
		<td><?= h($user['User']['name'])?>&nbsp;</td>
		<td><?= h($user['User']['password'])?>&nbsp;</td>
		<td><?= $this->Html->image('uploads/avatas/thumb/small'.'/'.$user['User']['avata'], array('alt' => 'Cakephp'))?></td>
		<td><?= h($user['User']['email'])?>&nbsp;</td>
		<td><?= h($user['User']['gender'])?>&nbsp;</td>
		<td><?= h($user['User']['created'])?>&nbsp;</td>
		<td><?= h($user['User']['modified'])?>&nbsp;</td>
		<td class="actions">
			<?= 
				$this->Html->link(
					__('Edit'),
					array('action' => 'edit', $user['User']['id']),
					array('class' => 'btn btn-success btn-small')	
				)
			?>
			<?= 
				$this->Form->postLink(
					__('Delete'), array('action' => 'delete', $user['User']['id']),
					array('class' => 'btn btn-danger btn-small'),
					__('Are you sure you want to delete # %s?', $user['User']['id'])
				)
			?>
		</td>
	</tr>
<?php endforeach;?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>