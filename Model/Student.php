<?php

class Student extends AppModel {
	public $validate = array('name'      => array('rule' => 'notBlank', 'message' => "The name can't be empty!!!!!" ),
	                         'last_name' => array('rule' => 'notBlank', 'message' => "The Last Name can't be empty!!!!!" )
	                        );
}