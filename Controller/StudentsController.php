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
                    $this->Session->setFlash("It was recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	  $this->redirect(array('action' => 'index'));
	  	else:
          $this->Session->setFlash("It wasn't recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	  $this->redirect(array('action' => 'add'));
	  	endif;
	  endif;
	}

	public function edit($id = null){
	  $this->Student->id = $id;
	  if($this->request->is('get')):
	    $this->request->data = $this->Student->read();
	  else:
	  	if($this->Student->save($this->request->data)):
          $this->Session->setFlash("It was updated the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	  $this->redirect(array('action' => 'index'));
	  	else:
          $this->Session->setFlash("It wasn't updated the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	  $this->request->data = $this->Student->read();
	  	  $this->redirect(array('action' => 'index'));
	  	endif;
	  endif;
	}

	public function delete($id){
	  if($this->request->is('get')):
	  	$this->Session->setFlash("This Method isn't allowed");
	  	$this->redirect(array('action' => 'index'));
	  else:
	  	if($this->Student->delete($id)):
	  	  $this->Session->setFlash("It was deleted the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	  $this->redirect(array('action' => 'index'));
	    else:
          $this->Session->setFlash("It wasn't deleted the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	  $this->redirect(array('action' => 'index'));
	    endif;
	  endif;
	}

}