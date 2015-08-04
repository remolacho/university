<?php

class Teacher extends AppModel {
	public $displayField = 'name';
	public $hasMany      = array('Course' => array('className' => 'Course', 'foreingKey' => 'teacher_id', 'dependent' => true));
	public $validate = array('name'              => array('maxlength' => array('rule' => array('maxLength', '20'),  'message' => 'Maximum 20 characters'),
						  			                      'notblank'  => array('rule' => 'notBlank',                'message' => "The name can't be empty!!!!!" )),   
	                         'last_name'         => array('maxlength' => array('rule' => array('maxLength', '20'),  'message' => 'Maximum 20 characters'),
						  			                      'notblank'  => array('rule' => 'notBlank',                'message' => "The Last Name can't be empty!!!!!" )),
	                         'document_identity' => array('numeric'   => array('rule' => 'numeric',                 'message' => 'Only numbers for document identity'),
						  			                      'maxlength' => array('rule' => array('maxLength', '15'),  'message' => 'Maximum 15 characters'),
						  			                      'notblank'  => array('rule' => 'notBlank',                'message' => "The Document Identity can't be empty!!!!!" ),
						  			                      'isunique'  => array('rule' => 'isUnique',                'message' => "The Document Identity already was added")),
	                         'email'             => array('email'     => array('rule' => array('email', true),      'message' => "The email's format is wrong"),
	                         	                          'maxlength' => array('rule' => array('maxLength', '50'),  'message' => 'Maximum 50 characters'),
						  			                      'notblank'  => array('rule' => 'notBlank',                'message' => "The Email can't be empty!!!!!" ),
						  			                      'isunique'  => array('rule' => 'isUnique',                'message' => "The email already was added")),
	                         'phone'             => array('phone'     => array('rule' => array('phone', null, 'us'),'message' => "The phone's format is wrong"))
	                        );
}