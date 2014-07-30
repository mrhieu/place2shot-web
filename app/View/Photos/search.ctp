<?php    
        //tao form tim kiem
    echo $this->Form->create('Photo');
    echo $this->Form->input('title', array('label'=>'Title'));
    echo $this->Form->end('Search');
 
        //xuat ket qua tim kiem 
    if(!empty($photos)){
        foreach($photos as $photo){
            echo "<div>";
            echo $this->Html->image('uploads/images/thumb/small' .'/'.$photo['Photo']['img_file'] );
            echo $photo['Photo']['title'];
            echo $this->Html->link($photo['User']['name'], array('controller' => 'users', 'action' => 'view', $photo['User']['id']));
            echo "</div>";
            echo "</br>";
        }
    }
?>