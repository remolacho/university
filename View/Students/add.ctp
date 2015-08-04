<?php echo $this->element('Flash/obj_error');?>
<h1><?php echo $this->Html->link("Students' List", array('action' => 'index')); ?> | Add Student</h1>
<div class="add">
  <?php
    echo $this->Form->create("Student", array('action' => 'add'));
    echo $this->Form->imput("document_identity", array('
    type' => 'number', 'placeHolder' => 'Document Identity'));
    echo $this->Form->imput("name", array('placeHolder' => 'First Name'));
    echo $this->Form->imput("last_name", array('placeHolder' => 'Last Name'));
    echo $this->Form->imput("email", array('type' => 'email','placeHolder' => 'Email'));
    echo $this->Form->imput("age", array('type' => 'number','placeHolder' => 'Age'));
    echo $this->Form->imput("phone", array('placeHolder' => 'Phone'));	
    echo $this->Form->imput("address", array('placeHolder' => 'Address'));
    echo $this->Form->end("Save");
  ?>
</div>