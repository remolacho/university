<?php
class TeachersController extends AppController {
	public function index(){
	  $this->Teacher->recursive = 0;
      $this->set("teachers", $this->paginate());
	}

	public function add(){
	   $this->_errors_messages();
	   if($this->request->is('post')):
         $teacher = $this->request->data;
         if($this->Teacher->save($this->request->data)):
			$this->Session->setFlash("It was recorded the teacher ".$this->request->data['Teacher']['name']." with success");
	  	  	$this->redirect(array('action' => 'index'));
	  	else:
	  	  	$this->request->data = $teacher;
	  	  	$this->_errors_messages($this->Teacher);
          	$this->Session->setFlash("It wasn't recorded the teacher ".$this->request->data['Teacher']['name']);
	  	endif;
	   endif;
	}
}