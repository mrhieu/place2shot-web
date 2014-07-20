<!-- <div class="actions">
		<ul >
	    		<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
	    	<?php if($current_user['roles' ] == 'admin'): ?>
	    		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	        	<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	        <?php endif; ?>
	        	<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
				
		</ul>
</div>  -->
<div class="Photos index">
	<!-- <div>
		<ul>
			
			<li><?= $this->Html->link(__d('Photo', 'New Photo'), array('controller' => 'Photos', 'action' => 'add'), array('class' => 'btn btn-primary btn-mini'))?></li>
		</ul>
	</div> -->
	<table cellpadding="0" cellspacing="0">
	<tr>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<th><?= $this->Paginator->sort('id', __d('Photo', 'id'))?></th>
		<?php endif; ?>
			<th><?= $this->Paginator->sort('user_id', __d('Photo', 'User'))?></th>
			<th><?= $this->Paginator->sort('gallery_id', __d('Photo', 'Gallery'))?></th>
			<th><?= $this->Paginator->sort('title', __d('Photo', 'Title'))?></th>
			<th><?= $this->Paginator->sort('image', __d('Photo', 'Image'))?></th>
			<th><?= $this->Paginator->sort('description', __d('Photo', 'Description'))?></th>
			<th><?= $this->Paginator->sort('created', __d('Photo', 'Created'))?></th>
			<th><?= $this->Paginator->sort('modified', __d('Photo', 'Modified'))?></th>
			<th class="actions"><?= __('Actions')?></th>
	</tr>
	<?php foreach ($photos as $photo): ?>
	<tr>
		<?php if($current_user['roles' ] == 'admin'): ?>
		<td><?= h($photo['Photo']['id'])?>&nbsp;</td>
		<?php endif; ?>
		<td>
			<?= $this->Html->link($photo['User']['name'], array('controller' => 'users', 'action' => 'view', $photo['User']['id']))?>
		</td>
		<td>
			<?= $this->Html->link($photo['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id']))?>
		</td>
		<td><?= h($photo['Photo']['title'])?>&nbsp;</td>
		<td><?= $this->Html->image($photo['Photo']['img_file'], array('alt' => 'Cakephp'))?></td>
		<td><?= h($photo['Photo']['description'])?>&nbsp;</td>
		<td><?= h($photo['Photo']['created'])?>&nbsp;</td>
		<td><?= h($photo['Photo']['modified'])?>&nbsp;</td>
		<td class="actions">
			<?= 
				$this->Html->link(
					__('View'),
					array('action' => 'view', $photo['Photo']['id']),
					array('class' => 'btn btn-success btn-small')	
				)
			?>
			<?= 
				$this->Html->link(
					__('Edit'),
					array('action' => 'edit', $photo['Photo']['id']),
					array('class' => 'btn btn-success btn-small')	
				)
			?>
			<?=
					$this->Html->link(
					__('Comment'),
					array('controller' => 'comments', 'action' => 'add',$photo['Photo']['id']),
					array('class' => 'btn btn-success btn-small')	
				)
			?>	
			<?= 
				$this->Form->postLink(
					__('Delete'), array('action' => 'delete', $photo['Photo']['id']),
					array('class' => 'btn btn-danger btn-small'),
					__('Are you sure you want to delete # %s?', $photo['Photo']['id'])
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
<!-- <div class="photos index">
	<h2>Photos</h2>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<?php if($current_user['roles' ] == 'admin'): ?>
					<th><?php echo $this->Paginator->sort('id');?></th>
				<?php endif; ?>
		            <th><?php echo $this->Paginator->sort('User');?></th>
		            
		            <th><?php echo $this->Paginator->sort('Gallery');?></th>
					<th><?php echo $this->Paginator->sort('Title');?></th>
		           	<th>Image</th>
					<th>Description</th>
					<th><?php echo $this->Paginator->sort('Created');?></th>
					<th><?php echo $this->Paginator->sort('Modified');?></th>
					<th class="actions">Actions</th>
			</tr>
	<?php
		$i = 0;
		foreach ($photos as $photo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
	<tr<?php echo $class;?>>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<td><?php echo $photo['Photo']['id']; ?>&nbsp;</td>
		<?php endif; ?>
			<td>
				<?php echo $this->Html->link($photo['User']['username'], array('controller' => 'users', 'action' => 'view', $photo['User']['id'])); ?>
			</td>
	    
	        <td>
				<?php echo $this->Html->link($photo['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($photo['Photo']['title'], array('action' => 'view', $photo['Photo']['id'])); ?>
			</td>
			<td><?php  echo $this->Html->image($photo['Photo']['img_file'], array('alt' => 'CakePHP')); ?></td>
		
			<td><?php echo $photo['Photo']['description']; ?>&nbsp;</td>
			<td><?php echo $photo['Photo']['created']; ?>&nbsp;</td>
			<td><?php echo $photo['Photo']['modified']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $photo['Photo']['id'])); ?>
	            <?php echo $this->Html->link(__('Comment', true), array('controller' => 'comments', 'action' => 'add', 'value' => $photo['Photo']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $photo['Photo']['title']), null, sprintf(__('Are you sure you want to delete?', true))); ?>
			</td>
	</tr>
<?php endforeach; ?>
	</table>
<!-- 	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p> -->

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
