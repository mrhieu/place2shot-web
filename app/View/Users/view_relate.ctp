<div class="related">
	<h2>Library</h2>
	<?php if (!empty($user['Photo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<th>Id</th>
		<?php endif; ?>
        <?php if($current_user['roles' ] == 'admin'): ?>
			<th>User Id</th>
        <?php endif; ?>
        	
			<th>Title</th>
	        <th>Image</th>
			<th>Description</th>
			<th>Created</th>
			<th>Modified</th>
			<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Photo'] as $photo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
				<td><?php echo $photo['id'];?></td>
            <?php if($current_user['roles' ] == 'admin'): ?>
				<td><?php echo $photo['user_id'];?></td>
            <?php endif; ?>
				<td><?php echo $photo['title'];?></td>
	            <td><?php echo $this->Html->image('uploads/images/thumb/small'.'/'.$photo['img_file'], array('alt' => 'Gallery Image'))?></td>
				<td><?php echo $photo['description'];?></td>
				<td><?php echo $photo['created'];?></td>
				<td><?php echo $photo['modified'];?></td>
				<td class="actions">
					<?= 
						$this->Html->link(
							__('View'),
							array('controller' =>'photos', 'action' => 'view', $photo['id']),
							array('class' => 'btn btn-success btn-small')	
						)
					?>
					<?= 
						$this->Html->link(
							__('Edit'),
							array('controller' =>'photos','action' => 'edit', $photo['id']),
							array('class' => 'btn btn-success btn-small')	
						)
					?>
					<?= 
						$this->Form->postLink(
							__('Delete'), 
							array('controller' =>'photos','action' => 'delete', $photo['id']),
							array('class' => 'btn btn-danger btn-small'),
							__('Are you sure you want to delete # %s?', $photo['id'])
						)
					?>
				</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>