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
	  	$student = $this->request->data;
	  	if($this->Student->save($this->request->data)):
          $this->Session->setFlash("It was recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	  $this->redirect(array('action' => 'index'));
	  	else:
	  	  $this->request->data = $student;
          $this->Session->setFlash("It wasn't recorded the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']);
	  	  $this->redirect(array('action' => 'add'));
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
	        $this->request->data = $student;
	      else:
            $this->Session->setFlash("This Method isn't allowed");
	  	    return $this->redirect(array('action' => 'index'));
	      endif;
	    endif;
      endif;
	}

	public function update(){
	    if($this->request->is('post')):
	      $student = $this->Student->findById($this->request->data["Student"]["id"]);
	  	  if (!$student):
            $this->Session->setFlash("This id isn't allowed, you can add a new student");
	  	    return $this->redirect(array('action' => 'add'));
	      else:
	  	    if($this->Student->save($this->request->data)):
              $this->Session->setFlash("It was updated the student ".$this->request->data['Student']['name']." ".$this->request->data['Student']['last_name']." with success");
	  	      return $this->redirect(array('action' => 'index'));
	  	    else:
	  	  	  /*debug($this->Student->invalidFields());
	  	      debug($this->request->data);
	  	      debug($student);
		      exit;*/
              $this->Session->setFlash("It wasn't updated the student ".$student['Student']['name']." ".$student['Student']['last_name']);
	  	      $this->request->data = $this->Student->read();
	  	      return $this->redirect(array('action' => 'edit',$this->Student->id));
	  	    endif;
	  	   endif;
	  	else:
          $this->Session->setFlash("This Method isn't allowed");
	  	  return $this->redirect(array('action' => 'index'));
	    endif;
	}

	public function delete($id){
	  if($this->request->is('get')):
	  	$this->Session->setFlash("This Method isn't allowed");
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