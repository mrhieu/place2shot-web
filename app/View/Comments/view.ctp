<div class="comments view">
<h2>Comment</h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<?php if($current_user['roles' ] == 'admin'): ?>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Id</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $comment['Comment']['id']; ?>
				&nbsp;
			</dd>
		<?php endif; ?>
	        <dt<?php if ($i % 2 == 0) echo $class;?>>User</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Post</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($comment['Photo']['title'], array('controller' => 'photos', 'action' => 'view', $comment['Photo']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>comment</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $comment['Comment']['comment']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Created</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $comment['Comment']['created']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Modified</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $comment['Comment']['modified']; ?>
				&nbsp;
			</dd>
	</dl>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
    	<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Comment', true), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Comment', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
