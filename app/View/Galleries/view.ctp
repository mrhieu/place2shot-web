<div class="galleries view">
	<h2>Gallery</h2>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Id</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $gallery['Gallery']['id']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Name</dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $gallery['Gallery']['name']; ?>
				&nbsp;
			</dd>
		</dl>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
    	<li><?php echo $this->Html->link(__('Home', true), array("controller" => "pages", "action" => "home")); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Gallery', true), array('action' => 'edit', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Gallery', true), array('action' => 'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3>Related Photos</h3>
	<?php if (!empty($gallery['Photo'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th>Id</th>
			<th>Gallery Id</th>
			<th>Title</th>
			<th>Description</th>
			<th class="actions">Actions</th>
		</tr>
	<?php
		$i = 0;
		foreach ($gallery['Photo'] as $photo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $photo['id'];?></td>
			<td><?php echo $photo['gallery_id'];?></td>
			<td><?php echo $photo['title'];?></td>
			<td><?php echo $photo['description'];?></td>
			
			<!--  -->
			
			
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New photo', true), array('controller' => 'photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
