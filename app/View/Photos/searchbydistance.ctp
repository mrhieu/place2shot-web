					<?php
						echo $this->Form->create('Photo',array(
							'action' => 'searchbytitle'
							));
						
 						
					?>
					<?php echo $this->Form->input('latitude', array(
									'div'=>'search_text',
									'id'=>'latitude',
									'placeholder'=>'Search...',
									'autocomplete'=>'off'
									)); 
					?>
					<?php echo $this->Form->input('longitude', array(
									'div'=>'search_text',
									'id'=>'longitude',
									'placeholder'=>'Search...',
									'autocomplete'=>'off'
									)); 
					?>
					<?php
							echo $this->Form->end('Search');
					?>
