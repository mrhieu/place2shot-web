<div class="users view">
<h2><?= __d('User', 'User')?></h2>
	<dl class="dl-horizontal">
		<dt><?= __d('User', 'Id')?></dt>
		<dd>
			<?= h($user['User']['id'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Username')?></dt>
		<dd>
			<?= h($user['User']['username'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Password')?></dt>
		<dd>
			<?= h($user['User']['password'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Gender')?></dt>
		<dd>
			<?= h($user['User']['gender'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Email')?></dt>
		<dd>
			<?= h($user['User']['email'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Created')?></dt>
		<dd>
			<?= h($user['User']['created'])?>
			&nbsp;
		</dd>
		<dt><?= __d('User', 'Modified')?></dt>
		<dd>
			<?= h($user['User']['modified'])?>
			&nbsp;
		</dd>
	</dl>
</div>