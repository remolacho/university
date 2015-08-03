<?php echo $this->element('Flash/obj_error');?>
<h1><?php echo $this->Html->link('Index', array('action' => 'index')); ?> | Edit Student
</h1>
<?php
    echo $this->Form->create("Student", array('action' => 'edit'));
	echo $this->Form->label("document_identity");
	echo $this->Form->imput("document_identity", array('type' => 'number'));
	echo $this->Form->label("name");
	echo $this->Form->imput("name");
	echo $this->Form->label("last_name");
	echo $this->Form->imput("last_name");
	echo $this->Form->label("email");
	echo $this->Form->imput("email", array('type' => 'email'));
    echo $this->Form->label("age");
	echo $this->Form->imput("age", array('type' => 'number'));
    echo $this->Form->label("phone");
	echo $this->Form->imput("phone");	
	echo $this->Form->label("address");
	echo $this->Form->imput("address");
	echo $this->Form->imput("id", array('type' => 'hidden'));
	echo $this->Form->end("Update");
?>