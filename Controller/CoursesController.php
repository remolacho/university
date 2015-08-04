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

	public function edit($id = null){
	  if (!$id):
        $this->Session->setFlash("This Method isn't allowed, you can add a new course");
	  	return $this->redirect(array('action' => 'add'));
      else:
      	$course = $this->Course->findById($id);
        if (!$course):
          $this->Session->setFlash("This id isn't allowed, you can add a new course");
	  	  return $this->redirect(array('action' => 'add'));
	    else:
	      if($this->request->is('get')):
	      	$this->_errors_messages();
	        $this->request->data = $course;
	      else:
 	  	    if($this->Course->save($this->request->data)):
              $this->Session->setFlash("It was updated the teacher ".$this->request->data['Course']['name']." with success");
	  	      return $this->redirect(array('action' => 'index'));
	  	    else:
	  	      $this->_errors_messages($this->Course);
              $this->Session->setFlash("It wasn't updated the Course ");
	  	    endif;
	      endif;
	      $teachers = $this->Course->Teacher->find("list");
	      $this->set(compact("teachers"));
	    endif;
      endif;
	}

	public function delete($id){
	  if($this->request->is('get')):
	  	$this->Session->setFlash(__("This Method isn't allowed"));
	  	$this->redirect(array('action' => 'index'));
	  else:
	  	if($this->Course->delete($id)):
	  	  $this->Session->setFlash("It was deleted the Course with success");
	  	  $this->redirect(array('action' => 'index'));
	    else:
          $this->Session->setFlash("It wasn't deleted the Course ".$this->request->data['Course']['name']);
	  	  $this->redirect(array('action' => 'index'));
	    endif;
	  endif;
	}

}