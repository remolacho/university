<?php
class CoursesController extends AppController {
	
	public $paginate = array('limit' => '10', 'order' => array('Course.id' => 'asc'));

	public function index(){
	  $this->Course->recursive = 0;
      $this->set("courses", $this->paginate());
	}

	public function add(){
	   $this->_errors_messages();
	   if($this->request->is('post')):
         $course = $this->request->data;
         if($this->Course->save($this->request->data)):
			$this->Session->setFlash("It was recorded the course ".$this->request->data['Course']['name']." with success");
	  	  	$this->redirect(array('action' => 'index'));
	  	else:
	  	  	$this->request->data = $course;
	  	  	$this->_errors_messages($this->Course);
          	$this->Session->setFlash("It wasn't recorded the course ".$this->request->data['Course']['name']);
	  	endif;
	   endif;
	   $teachers = $this->Course->Teacher->find("list");
       $students = $this->Course->Student->find("list");
	   $this->set(compact("teachers","students"));
	}
}