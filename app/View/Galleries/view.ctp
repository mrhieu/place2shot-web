<?php echo $this->html->css("gallery.css"); ?>
<div class="galleries">

<table class="all_gr" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="view_gr" colspan="3">
			<?php echo $gallery['Gallery']['name'].' Gallery'; ?>
		</td>
	</tr>
	<tr>
		<td class="hr_ng" colspan="3">
			<hr />
		</td>
	</tr>
  <tr>
    <td class="menu" valign="top">
		<table border="0" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="action_mn"><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index'));?></td>
		  </tr>
		  <tr>
			<td class="action_mn"><?php echo $this->Html->link(__('New Gallery', true), array('action' => 'add')); ?></td>
		  </tr>
		  <tr>
			<td class="action_mn"><?php echo $this->Html->link(__('Delete Gallery', true), array('action' => 'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?></td>
		  </tr>
		</table>
	</td>
    <td class="hr"></td>
    <td class="nd">
		<table class="gallery tb_gr" border="1" cellspacing="0" cellpadding="0">
		  <tr>
			<td class="title" colspan="7">Related Photos</td>
		  </tr>
		  <tr>
			<td>Id</td>
			<td>Gallery Id</td>
			<td>Title</td>
			<td>Description</td>
			<td colspan="3">Actions</td>
		  </tr>
		<?php
		$i = 0;
		foreach ($gallery['Photo'] as $photo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr>
			<td><?php echo $photo['id'];?></td>
			<td><?php echo $photo['gallery_id'];?></td>
			<td><?php echo $photo['title'];?></td>
			<td><?php echo $photo['description'];?></td>
			<td><?php echo $this->Html->link(__('View', true), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?></td>
			<td><?php echo $this->Html->link(__('Edit', true), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?></td>
			<td><?php echo $this->Html->link(__('Delete', true), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photo['id'])); ?></td>
		</tr>
	<?php endforeach; ?>
		</table>
	</td>
  </tr>
</table>
</div>
