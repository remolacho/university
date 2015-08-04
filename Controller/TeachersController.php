<?php
class TeachersController extends AppController {
	public $paginate = array('limit' => '10', 'order' => array('Teacher.id' => 'asc'));
	
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

	public function edit($id = null){
	  if (!$id):
        $this->Session->setFlash("This Method isn't allowed, you can add a new teacher");
	  	return $this->redirect(array('action' => 'add'));
      else:
      	$teacher = $this->Teacher->findById($id);
        if (!$teacher):
          $this->Session->setFlash("This id isn't allowed, you can add a new teacher");
	  	  return $this->redirect(array('action' => 'add'));
	    else:
	      if($this->request->is('get')):
	      	$this->_errors_messages();
	        $this->request->data = $teacher;
	      else:
 	  	    if($this->Teacher->save($this->request->data)):
              $this->Session->setFlash("It was updated the teacher ".$this->request->data['Teacher']['name']." ".$this->request->data['Teacher']['last_name']." with success");
	  	      return $this->redirect(array('action' => 'index'));
	  	    else:
	  	      $this->_errors_messages($this->Teacher);
              $this->Session->setFlash("It wasn't updated the teacher ");
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
	  	  $this->Session->setFlash("It was deleted the Teacher with success");
	  	  $this->redirect(array('action' => 'index'));
	    else:
          $this->Session->setFlash("It wasn't deleted the Teacher ".$this->request->data['Teacher']['name']." ".$this->request->data['Teacher']['last_name']);
	  	  $this->redirect(array('action' => 'index'));
	    endif;
	  endif;
	}

}