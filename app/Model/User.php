<?php 
App::uses('Security', 'Utility');
App::uses('UsersAppModel', 'Users.Model');
class User extends AppModel{ 
	var $name = 'User';
	var $displayField = 'name';
	var $validate = array(
                                'name' => array(
                                    'nonEmpty' => array(
                                        'rule' => array('notEmpty'),
                                        'message' => 'A username is required',
                                        'allowEmpty' => false
                                    ),
                                    'unique' => array(
                                        'rule'    => array('isUnique'),
                                        'message' => 'This username is already in use'
                                    )
                                ),
								'username' => array(
                                    'nonEmpty' => array(
                                        'rule' => array('notEmpty'),
                                        'message' => 'A username is required',
                                        'allowEmpty' => false
                                    ),
                                    'between' => array( 
                                        'rule' => array('between', 5, 15), 
                                        'required' => true, 
                                        'message' => 'Usernames must be between 5 to 15 characters'
                                    ),
                                     'unique' => array(
                                        'rule'    => array('isUnique'),
                                        'message' => 'This username is already in use'
                                    ),
                                    'alphaNumericDashUnderscore' => array(
                                        'rule'    => array('alphaNumericDashUnderscore'),
                                        'message' => 'Username can only be letters, numbers and underscores'
                                    ),
                                ),
                                'password' => array(
                                    'required' => array(
                                        'rule' => array('notEmpty'),
                                        'message' => 'A password is required'
                                    ),
                                    'between' => array( 
                                        'rule' => array('between', 6, 15), 
                                        'required' => true, 
                                        'message' => 'Password must be between 6 to 15 characters'
                                    ),
									'match' => array(
										'rule' =>'matchPasswords',
										'message' => 'The passwords do not match'
									)
                                ),
                                'password_confirm' => array(
                                    'required' => array(
                                        'rule' => array('notEmpty'),
                                        'massage' => 'A password is required'
                                    )
                                ),
                                  /*'gender' => array(
           							'valid' => array(
              						'rule' => array('inList', array('male', 'female')),
              						'message' => 'Please enter a valid gender',
                					'allowEmpty' => false
            						)
        						),*/
                                'email' => array(
                                    'required' => array(
                                        'rule' => array('email', true),    
                                        'message' => 'Please provide a valid email address.'   
                                    ),
									'Please enter an email.'=>array(
										'rule'=>'notEmpty',
										'message'=>'Please enter an email.'
									),
                                     'unique' => array(
                                        'rule'    => array('isUnique'),
                                        'message' => 'This email is already in use',
                                    ),
                                ),
                                
                            );
								
	
	
	
	var $actsAs = array(
    'MeioUpload' => array(
		'avata' => array(
            'dir' => 'img/uploads/avatas',
            'create_directory' => false,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
			'zoomCrop' => true,
            'thumbsizes' => array(
            //'normal' => array('width' => 400, 'height' => 300),
			'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'zoomCrop' => true),
    		'large'  => array('width' => 800, 'height' => 600,'maxDimension' => '', 'zoomCrop' => true)
				),
			'default' => 'default.jpg'
			
          
       	 	),
		'cover' => array(
				'dir' => 'img/uploads/covers',
				'create_directory' => false,
				'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
				'allowed_ext' => array('.jpg', '.jpeg', '.png'),
				'zoomCrop' => true,
				'thumbsizes' => array(
				//'normal' => array('width' => 400, 'height' => 300),
				'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'zoomCrop' => true),
				'large'  => array('width' => 800, 'height' => 600,'maxDimension' => '', 'zoomCrop' => true)
					),
				'default' => 'default.jpg'
			
          
       	 	)
    	)
	);
//---------------------------------
	public function matchPasswords($data){
		if($data['password'] == $this->data['User']['password_confirm']){
			return TRUE;
		}
		$this->Invalidate('password_confirm', 'The password do not match');
			return FALSE;
	}
    public function hashPasswords($data){
        if(isset($this->data['User']['password'])){
            $this->data['User']['password'] = Security::hash($this->data['User']['password'], NULL, TRUE); 
            return $data;
        }
        return $data;
    }
    
    public function beforeSave(){
        $this->hashPasswords(NULL, TRUE);
        return TRUE;
    }
//---------------------------------
    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 
 
 
 
     
    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	
}

?>