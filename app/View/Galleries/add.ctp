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
		<table class="gallery" border="0" cellspacing="10" cellpadding="0">
		  <tr>
			<td class="title">Add Gallery</td>
		</tr>
		  <tr>
			<td class="add_gr">	
				<?php echo $this->Form->create('Gallery');?>
					<?php
						echo $this->Form->input('name');
					?>
			</td>
		  </tr>
		  <tr>
			<td class="add_gr">	
				<?php echo $this->Form->end(__('Submit', true));?>
			</td>
		  </tr>
		</table>
	</td>
  </tr>
</table>

	

</div>