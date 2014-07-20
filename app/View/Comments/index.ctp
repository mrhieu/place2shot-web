<div class="comments index">
	<h2>Comments</h2>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<?php if($current_user['roles' ] == 'admin'): ?>
					<th><?php echo $this->Paginator->sort('id');?></th>
				<?php endif; ?>
					<th><?php echo $this->Paginator->sort('user_id');?></th>
		            <th><?php echo $this->Paginator->sort('photo_id');?></th>
					<th><?php echo $this->Paginator->sort('comment');?></th>
					<th><?php echo $this->Paginator->sort('created');?></th>
					<th><?php echo $this->Paginator->sort('modified');?></th>
					<th class="actions">Actions</th>
			</tr>
	<?php
		$i = 0;
		foreach ($comments as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
	<tr<?php echo $class;?>>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<td><?php echo $comment['Comment']['id']; ?>&nbsp;</td>
		<?php endif; ?>
	        <td>
				<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($comment['Photo']['title'], array('controller' => 'photos', 'action' => 'view', $comment['Photo']['id'])); ?>
			</td>
			<td><?php echo $comment['Comment']['comment']; ?>&nbsp;</td>
			<td><?php echo $comment['Comment']['created']; ?>&nbsp;</td>
			<td><?php echo $comment['Comment']['modified']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $comment['Comment']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $comment['Comment']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id'])); ?>
			</td>
	</tr>
<?php endforeach; ?>
	</table>
	<!-- <p>
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
<div class="actions">
	<h3>Actions</h3>
	<ul>
    	<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>