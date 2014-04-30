<?php
App::uses('AuthComponent', 'Controller/Component');
/**
 */
class User extends AdminAppModel {
    public $name = 'User';
    
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}
	
	public $actsAs = array(
	        'Upload.Upload' => array(
	            'resume' => array(
	                'fields' => array(
	                    'dir' => 'resume_dir',
	                    'type' => 'resume_type',
	                    'size' => 'resume_size',
	                )
	            ),
	            'photo' => array(
	                'fields' => array(
	                    'dir' => 'photo_dir',
	                    'type' => 'photo_type',
	                    'size' => 'photo_size',
	                )
	            ),
	             'thumbnailSizes' => array(
                    'big' => '200x200',
                    'small' => '120x120',
                    'thumb' => '80x80'
                )
	        )
	    );
	
	
}