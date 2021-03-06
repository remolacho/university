<?php
class StudentsController extends AppController {
	public $helpers    = array('Html','Form');
	public $components = array('session');

	public function index(){
	  $condition = array('order' => 'name');
      $this->set("students", $this->Student->find("all",$condition));
	}

    public function add(){
	  if($this->request->is('post')):
	  	if($this->Student->save($this->request->data)):
          $this->Session->setFlash("It was recorded the student with success");
	  	  $this->redirect(array('action' => 'index'));
	  	else:
          $this->Session->setFlash("It wasn't recorded the student");
	  	  $this->redirect(array('action' => 'index'));
	  	endif;
	  endif;
	}

}