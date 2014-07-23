<?php    
        //tao form tim kiem
    echo $this->Form->create('User');
    echo $this->Form->input('username', array('label'=>'Username'));
    echo $this->Form->end('Search');
 
        //xuat ket qua tim kiem 
    if(!empty($users)){
        foreach($users as $user){
            echo "<div>";
            echo "Username: ".$user['User']['username'].'</br>';
            
            echo "Email: ".$user['User']['email'];
            echo "</div>";
            echo "</br>";
        }
    }
?>