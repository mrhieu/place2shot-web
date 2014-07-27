<style>

#photo{
	text-align:center;
	margin-top:20px;}
img{
	max-width:1100px;
	height:auto;
	background-repeat:no-repeat;
}
</style>
<div id="user_info">
	<div class="acc">
	
	</div>
	
	<div class="other_info">
	
	</div>
	
</div>

<div id="photo">
	<?php
		echo $this->html->image('uploads/images'.'/'.$photo['Photo']['img_file'],array('class'=>'image'));
	?>
</div>


<div id="comment">
	<?php echo $this->Form->create('Comment');?>
                                             
		<fieldset>
			
		<?php
			echo $this->Form->input('Comment.user_id', array('type' => 'hidden', 'value' => $current_user));
			echo $this->Form->input('Comment.photo_id', array('type' => 'hidden', 'value' => $photo['Photo']['id']));
			echo $this->Form->input('Comment.comment', array('label' => false));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Comment', true));?>
</div>



<div class="related">
	<?php echo $this->Form->create('Comment');?>

	<h3>Comments</h3>
	<?php if (!empty($photo['Comment'])):?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<?php if($current_user['roles' ] == 'admin'): ?>
					<th>Id</th>
				<?php endif; ?>
                	<th>User</th>
					<th>Comment</th>
					<th>Created</th>
					<th>Modified</th>
					<th class="actions">Actions</th>
			</tr>
	<?php
		$i = 0;
		foreach ($photo['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
		<tr<?php echo $class;?>>
			<?php if($current_user['roles' ] == 'admin'): ?>
				<td><?php echo $comment['id'];?></td>
			<?php endif; ?>
            	<td><?php echo $this->Html->link($comment['user_id'], array('controller' => 'users', 'action' => 'view', $comment['user_id'])); ?>
		</td>
				<td><?php echo $comment['comment'];?></td>
				<td><?php echo $comment['created'];?></td>
				<td><?php echo $comment['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
				</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
	<?php echo $this->Form->end();?>
</div>







