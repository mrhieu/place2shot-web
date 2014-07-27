<div class="users form hero-unit" style="width: 400px; margin-right: auto ; margin-left: auto; height: 650px">
<?= $this->Form->create('User',array('type' => 'file'))?>
	<fieldset>
		<legend><?= __d('User', 'Upgrade')?></legend>
		<?= $this->Form->input('id')?>
		
		<?= $this->Form->input('name', array(
			'label' => __d('User', 'Name'),
			'autocomplete' => 'off'
			)
		)?>
		
		
<?=$this->Form->end(__('Submit'))?>
</div>
<div class="clear" >
</div>

<div class="details">
                            <p class="detail"><?php echo $this->Html->link('Setting password', array('controller'=>'users','action' => 'editpass', $current_user['id'])); ?></p>
							<p class="detail"><?php echo $this->Html->link('Setting email', array('controller'=>'users','action' => 'editemail', $current_user['id'])); ?></p>
							<p class="detail"><?php echo $this->Html->link('Setting avata', array('controller'=>'users','action' => 'editavata', $current_user['id'])); ?></p>
                             
               </div>