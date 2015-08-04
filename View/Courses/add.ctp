<?php echo $this->element('Flash/obj_error');?>
<h1><?php echo $this->Html->link('Index', array('action' => 'index')); ?> | Add Course</h1>
<?php
  echo $this->Form->create("Course", array('action' => 'add'));
  echo $this->Form->label("Teacher");
  echo $this->Form->select("teacher_id", $teachers, array('empty' => 'Choose a teacher'));
  echo $this->Form->label("Name");
  echo $this->Form->imput("name", array('placeHolder' => 'name'));
  echo $this->Form->label("Description");
  echo $this->Form->textArea("description", array('rows' => '5', 'placeHolder' => 'Description'));
  echo $this->Form->end("Save");
?>