<?php

class Course extends AppModel {
	public $displayField = 'name';
	public $belongsTo    = array('teacher' => array('className'  => 'Teacher', '
		                                             foreingKey' => 'teacher_id')
	                            );
	public $validate = array('name' => array('maxlength' => array('rule' => array('maxLength', '20'),  'message' => 'Maximum 20 characters'),
						  			         'notblank'  => array('rule' => 'notBlank',                'message' => "The name can't be empty!!!!!" ))
			                );
}