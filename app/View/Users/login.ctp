
<?php echo $this->html->css("banner"); ?>
<?php echo $this->html->css("register.css"); ?>
<?php echo $this->html->script("jquery/setformlogin.js"); ?>

		<div class="profile_border">
		<table class="profile"  cellspacing="0" cellpadding="0">
	  	<?php
			echo $this->Form->create('User',array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				)
			));
		?>
			  <tr>
				<td class="register" colspan="2">LOGIN</td>
			  </tr>
			  <tr>
				<td class="hr_class" colspan="2"><hr /></td>
			  </tr>
			  <tr>
				<td	 class="username">
					<?php 
					echo $this->Form->input('username',array(
						'type'=>'text',
						'value'=>'User Name',
						'id'=>'user_name',
						'title'=>'USER NAME',
						'onfocus'=>'set_not_value(this.id)',
						'onblur'=>'set_default_value(this.id)'
					));
					?>
				</td>
			  </tr>
			  <tr>
				<td class="password">
				<?php 
					echo $this->Form->input('password',array(
						'type'=>'password',
						'value'=>'password',
						'id'=>'password',
						'title'=>'PASSWORD',
						'onfocus'=>'set_not_value(this.id)',
						'onblur'=>'set_default_value(this.id)'
					));
				?>
				</td>
			  </tr>
			  <tr>
				<td class="submit" >
				<?php 
					echo $this->Form->end('LOGIN');
				?>
				</td>
			  </tr>
			  <tr>
				<td class="hr_class" colspan="2"><hr /></td>
			  </tr>
			  <tr>
				<td class="for_got_pw" colspan="2"><a href="#" >Forgot your password?</a></td>
			  </tr>
		  </form>
        </table>
		</div>
