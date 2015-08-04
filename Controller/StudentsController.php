<?php
class StudentsController extends AppController {
    public $paginate = array('limit' => '10', 'order' => array('Student.name' => 'asc'));
	
	public function index(){
      $this->Student->recursive = 0;
      $this->set("students", $this->paginate());
	}

    public function add(){
      $this->_errors_messages();
	  if($this->request->is('post')):
	  	$student = $this->request->data;
	  	if($this->Student->save($this->request->data)):
          $this->Session->setFlash("It was recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	  $this->redirect(array('action' => 'index'));
	  	else:
	  	  $this->request->data = $student;
	  	  $this->_errors_messages($this->Student);
          $this->Session->setFlash("It wasn't recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	endif;
	  endif;
	}

	public function edit($id = null){
	  if (!$id):
        $this->Session->setFlash("This Method isn't allowed, you can add a new student");
	  	return $this->redirect(array('action' => 'add'));
      else:
      	$student = $this->Student->findById($id);
        if (!$student):
          $this->Session->setFlash("This id isn't allowed, you can add a new student");
	  	  return $this->redirect(array('action' => 'add'));
	    else:
	      if($this->request->is('get')):
	      	$this->_errors_messages();
	        $this->request->data = $student;
	      else:
 	  	    if($this->Student->save($this->request->data)):
              $this->Session->setFlash("It was updated the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	      return $this->redirect(array('action' => 'index'));
	  	    else:
	  	      $this->_errors_messages($this->Student);
              $this->Session->setFlash("It wasn't updated the student ");
	  	    endif;
	      endif;
	    endif;
      endif;
	}

	public function delete($id){
	  if($this->request->is('get')):
	  	$this->Session->setFlash(__("This Method isn't allowed"));
	  	$this->redirect(array('action' => 'index'));
	  else:
	  	if($this->Student->delete($id)):
	  	  $this->Session->setFlash("It was deleted the student with success");
	  	  $this->redirect(array('action' => 'index'));
	    else:
          $this->Session->setFlash("It wasn't deleted the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	  $this->redirect(array('action' => 'index'));
	    endif;
	  endif;
	}

}