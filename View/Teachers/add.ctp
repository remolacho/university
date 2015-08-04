<?php echo $this->element('Flash/obj_error');?>
<legend><?php echo $this->Html->link("Teachers' List", array('action' => 'index')); ?> | Add Student</legend>
<div class='add'>
  <?php echo $this->Form->create("Teacher", array('action' => 'add'));?>
  <fieldset>
  <?php
    echo $this->Form->imput("document_identity", array('
    type' => 'number', 'placeHolder' => 'Document Identity'));
    echo $this->Form->imput("name", array('placeHolder' => 'First Name'));
    echo $this->Form->imput("last_name", array('placeHolder' => 'Last Name'));
    echo $this->Form->imput("email", array('type' => 'email','placeHolder' => 'Email'));
    echo $this->Form->imput("phone", array('placeHolder' => 'Phone'));	
    echo $this->Form->imput("address", array('placeHolder' => 'Address'));
    echo $this->Form->textArea("cv", array('rows' => '5', 'placeHolder' => 'CV'));
  ?>
  </fieldset>
  <?php echo $this->Form->end("Save"); ?>
</div>