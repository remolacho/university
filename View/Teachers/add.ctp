<?php echo $this->element('Flash/obj_error');?>
<legend><?php echo $this->Html->link("Teachers' List", array('action' => 'index')); ?> | Add Student</legend>
<div>
  <?php echo $this->Form->create("Teacher", array('action' => 'add'));?>
  <fieldset>
  <?php
    echo $this->Form->imput("document_identity", array('
    type' => 'number', 'placeHolder' => 'Document Identity', 'class' => 'numeric_di'));
    echo $this->Form->imput("name", array('placeHolder' => 'First Name', 'class' => 'alphanumeric'));
    echo $this->Form->imput("last_name", array('placeHolder' => 'Last Name', 'class' => 'alphanumeric'));
    echo $this->Form->imput("email", array('type' => 'email','placeHolder' => 'Email'));
    echo $this->Form->imput("phone", array('placeHolder' => 'Phone', 'class' => 'phone_us'));	
    echo $this->Form->imput("address", array('placeHolder' => 'Address'));
    echo $this->Form->textArea("cv", array('rows' => '5', 'placeHolder' => 'CV'));
  ?>
  </fieldset>
  <?php echo $this->Form->end("Save"); ?>
</div>