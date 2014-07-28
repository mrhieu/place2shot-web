

<?php echo $this->html->css("edit.css"); ?>
<table class="main_edit"  border="1" cellspacing="5" cellpadding="0">
  <tr>
    <td class="title" colspan="3">TITLE</td>
  </tr>
  <tr>
    <td class="setting_menu">
		<table class="menu_edit"  cellspacing="5" cellpadding="0">
		  <tr>
			<td class="change_name">
				<?php echo $this->Html->link('Setting', array('controller'=>'users','action' => 'edit', $current_user['id'])); ?>
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
    <td class="setting_main">
		<?= $this->Form->create('User',array('type' => 'file'))?>
			<fieldset>
				<legend><?= __d('User', 'Upgrade')?></legend>
				<table   cellspacing="5" cellpadding="0"> 
				<?= $this->Form->input('id')?>
				<tr>
					<td class="name">Email</td>
					<td>
				<?= $this->Form->input('email', array(
					//'label' => __d('User', 'Email'),
					'label'=>false,
					'autocomplete' => 'off'
					)
				)?>
				</td>
				<tr>
					<td colspan="2">
				
		<?=$this->Form->end(__('Submit'))?>
			</td>
				</tr>
				</table>
	</td>
    <td class="setting_profile">
		<table class="edit_profile" border="1" cellspacing="0" cellpadding="0">
		  <tr>
			<td class="edit_avatar" rowspan="5">
				<img src="" />
			</td>
			<td class="edit_name">change</td>
		  </tr>
		  <tr>
			<td class="edit_email">change</td>
		  </tr>
		  <tr>
			<td class="edit_gender">change</td>
		  </tr>
		  <tr>
			<td class="edit_modified">change</td>
		  </tr>
		  <tr>
			<td class="edit_created">change</td>
		  </tr>
		</table>

	</td>
  </tr>
</table>
