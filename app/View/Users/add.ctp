<div class="users form hero-unit" style="width: 350px; margin-right: auto ; margin-left: auto; ">

<?= $this->Form->create('User',array('type' => 'file'))?>
	<fieldset>
		<legend><?= __d('User', 'Register')?></legend>
		<?= $this->Form->input('username', array(
			'label' => __d('User', 'Username'),
			'placeholder' => __d('User', '5-15 characters'),
			'autocomplete' => 'off'
			)
		)?>
		<?= $this->Form->input('password', array(
			'label' => __d('User', 'Password'),
			'placeholder' => __d('User', '6-15 chracters'),
			'autocomplete' => 'off',
			'type' => 'password'
			)
		)?>
		<?= $this->Form->input('password_confirm', array(
			'label' => __d('User', 'Confirm Password'),
			'placeholder' => __d('User', 'confirm password'),
			'autocomplete' => 'off',
			'type' => 'password'
			)
		)?>
		<?= $this->Form->input('email', array(
			'label' => __d('User', 'Email'),
			'placeholder' => __d('User', 'email@domain.com'),
			'autocomplete' => 'off',
			)
		)?>

	</fieldset>
<?=$this->Form->end(__('Submit'))?>
</div>



