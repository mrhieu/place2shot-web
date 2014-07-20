<div class="Photos view">
<h2><?= __d('Photo', 'Photo')?></h2>
	<dl class="dl-horizontal">
			
			<dt><?= __d('Photo', 'Image')?></dt>
			<dd>
				<?= $this->Html->image($photo['Photo']['img_file'], array('alt' => 'Cakephp', 'height' => 300, 'width' => 800))?>
				&nbsp;
			</dd>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<dt><?= __d('Photo', 'Id')?></dt>
			<dd>
				<?= h($photo['Photo']['id'])?>
				&nbsp;
			</dd>
		<?php endif; ?>
			<dt><?= __d('Photo', 'Gallery')?></dt>
			<dd>
				<?= $this->Html->link($photo['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id']))?>
				&nbsp;
			</dd>
			<dt><?= __d('Photo', 'Title')?></dt>
			<dd>
				<?= h($photo['Photo']['title'])?>
				&nbsp;
			</dd>
			
			<dt><?= __d('Photo', 'Description')?></dt>
			<dd>
				<?= h($photo['Photo']['description'])?>
				&nbsp;
			</dd>
			<dt><?= __d('Photo', 'Created')?></dt>
			<dd>
				<?= h($photo['Photo']['created'])?>
				&nbsp;
			</dd>
			<dt><?= __d('Photo', 'Modified')?></dt>
			<dd>
				<?= h($photo['Photo']['modified'])?>
				&nbsp;
			</dd>
	</dl>
</div>



<!-- <div class="photos view">
<h2>Photo</h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Id</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $photo['Photo']['id']; ?>
				&nbsp;
			</dd>
		<?php endif; ?>
	        <dt<?php if ($i % 2 == 0) echo $class;?>>User</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($photop['User']['username'], array('controller' => 'users', 'action' => 'view', $photo['User']['id'])); ?>
				&nbsp;
			</dd>
	        <dt<?php if ($i % 2 == 0) echo $class;?>>Gallery</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($photo['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Title</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $photo['Photo']['title']; ?>
				&nbsp;
			</dd>
	   		<dt<?php if ($i % 2 == 0) echo $class;?>>Image</dt>
        	<dd<?php if ($i++ % 2 == 0) echo $class;?>>
      		  	<?php  echo $this->Html->image($photo['Photo']['img_file'], array('alt' => 'Cakephp')); ?>
        	</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Description</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $photo['Photo']['description']; ?>
				&nbsp;
			</dd>
        <?php if($current_user['roles' ] == 'admin'): ?>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Created</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $photo['Photo']['created']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Modified</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $photo['Photo']['modified']; ?>
				&nbsp;
			</dd>
        <?php endif; ?>
	</dl>
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
		<li><?php echo $this->Html->link(__('Edit Photo', true), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Photo', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete?', true))); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
<div class="related">
	<h3>Comments</h3>
	<?php if (!empty($photo['Comment'])):?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<?php if($current_user['roles' ] == 'admin'): ?>
					<th>Id</th>
				<?php endif; ?>
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add', $photo['Photo']['id']));?> </li>
		</ul>
	</div>
</div>
 -->