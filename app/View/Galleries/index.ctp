<?php echo $this->html->css("gallery.css"); ?>
<div class="galleries">

<table class="all_gr" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="menu" valign="top">
		<table border="0" cellspacing="10px" cellpadding="0">
		  <tr>
			<td class="action_mn"><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index'));?></td>
		  </tr>
		  <tr>
			<td class="action_mn"><?php echo $this->Html->link(__('New Gallery', true), array('action' => 'add')); ?></td>
		  </tr>
		</table>
	</td>
    <td class="hr"></td>
    <td class="nd">
		<table class="gallery" border="0" cellspacing="5" cellpadding="0">
		  <tr>
			<td class="title" colspan="5">Gallery</td>
		  </tr>
		  <tr>
			<td class="id_gr"><?php echo $this->Paginator->sort('id');?></td>
			<td class="name_gr"><?php echo $this->Paginator->sort('name');?></td>
			<td class="action_gr" colspan="3">Actions</td>
		  </tr>
		  
			  <?php
				$i = 0;
				foreach ($galleries as $gallery):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr>
			<td><?php echo $gallery['Gallery']['id']; ?></td>
			<td><?php echo $gallery['Gallery']['name']; ?></td>
			<td><?php echo $this->Html->link(__('View', true), array('action' => 'view', $gallery['Gallery']['id'])); ?></td>
			<td><?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $gallery['Gallery']['id'])); ?></td>
			<td><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?></td>
				 
		 </tr>
		 <?php endforeach; ?>
		  <tr>
			<td colspan="5">
				<div class="paging">
					<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
				 | 	<?php echo $this->Paginator->numbers();?>
			 |
					<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
				</div>
			</td>
		  </tr>
		</table>
	</td>
  </tr>
</table>

	

</div>