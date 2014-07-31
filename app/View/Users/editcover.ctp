<?php echo $this->html->css("edit.css"); ?>
<div id="bgr_edit">
	<table class="main_edit"  border="0" cellspacing="30" cellpadding="0">
	  <tr>
		<td class="title" colspan="3">
			<table class="menu_title" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<?php echo $this->Html->link('Setting cover', array('controller'=>'users','action' => 'editcover', $current_user['id'])); ?>
					</td>
				</tr>
			</table>
		</td>
	  </tr>
	  <tr>
		<td class="setting_menu" valign="top">
			<table class="menu_edit"  cellspacing="5" cellpadding="0">
			  <tr>
				<td class="change_name">
					<?php echo $this->Html->link('Setting', array('controller'=>'users','action' => 'edit', $current_user['id'])); 
					?>
				</td>
			  </tr>
			  <tr>
				<td class="change_pass">
					<?php echo $this->Html->link('Setting password', array('controller'=>'users','action' => 'editpass', $current_user['id'])); ?>
				</td>
			  </tr>
			  <tr>
				<td class="change_avatar">
					<?php echo $this->Html->link('Setting avata', array('controller'=>'users','action' => 'editavata', $current_user['id'])); ?>
				</td>
			  </tr>
			  <tr>
				<td class="change_email">
					<?php echo $this->Html->link('Setting email', array('controller'=>'users','action' => 'editemail', $current_user['id'])); ?>
				</td>
			  </tr>
			  <tr>
				<td class="change_cover">
					<?php echo $this->Html->link('Setting cover', array('controller'=>'users','action' => 'editcover', $current_user['id'])); ?>
				</td>
			  </tr>
			</table>

		</td>
		<td>
			<div class="phan_cach"></div>
		</td>
		<td class="setting_main">
		<?= $this->Form->create('User',array('type' => 'file'))?>
			<fieldset>
			<table border="0"  cellspacing="20" cellpadding="0">
				
				<legend><?= __d('User', 'Upgrade')?></legend>
				<?= $this->Form->input('id')?>
				<tr>
					<td class="name">Cover</td>
					<td class="nd_set">
				<?= $this->Form->input('cover', array(
					//'label' => __d('User', 'Cover'),
					'label'=>false,
					'autocomplete' => 'off',
					'type' => 'file'
					)
				)?>
				</td>
				<tr>
					<td class="button_sm" colspan="2">
				
				
					<?=$this->Form->end(__('Submit'))?>
				</td>
				</tr>
				</table>
	</td>
  </tr>
</table>
</div>