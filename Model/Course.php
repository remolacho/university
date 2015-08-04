<?php

class Course extends AppModel {
	public $displayField = 'name';
	
	public $belongsTo    = array('teacher' => array('className'  => 'Teacher', '
		                                             foreingKey' => 'teacher_id')
	                            );

    public $hasAndBelongsToMany = array('student' => array('className'  => 'Student', 
    	                                                   'joinTable'  => 'courses_students', 
    	                                                   'foreingKey' => 'course_id', 
    	                                                   'associationForeingKey' => 'student_id' ));

 
	public $validate = array('name'       => array('maxlength' => array('rule' => array('maxLength', '20'),  'message' => 'Maximum 20 characters'),
						  			               'notblank'  => array('rule' => 'notBlank',                'message' => "The name can't be empty!!!!!" )),
	                         'teacher_id' => array('numeric'   => array('rule' => 'numeric',                 'message' => 'Only numbers for Teacher ID !!!!!'),
						  			               'notblank'  => array('rule' => 'notBlank',                'message' => "You need associate the course to teacher !!!!!" ))				  			               
			                );
}