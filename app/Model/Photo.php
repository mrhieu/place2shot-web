<?php
class Photo extends AppModel {
	var $name = 'Photo';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'img_file' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),*/
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'photo_id',
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
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'gallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $actsAs = array(
    'MeioUpload' => array(
		'img_file' => array(
            'dir' => 'img',
            'create_directory' => false,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
			'zoomCrop' => true,
            'thumbsizes' => array(
            'normal' => array('width' => 400, 'height' => 300),
				),
			'default' => 'default.jpg'
			
          
       	 	)
    	)
	);
	public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}
