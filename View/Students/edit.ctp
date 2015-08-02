<h1>Edit Student</h1>
<?php
    echo '<pre>';
    //print_r($invalidFields);
    echo '</pre>';
    echo $this->Form->create("Student", array('action' => 'edit'));
	echo $this->Form->label("document_identity");
	echo $this->Form->imput("document_identity");
	echo $this->Form->label("name");
	echo $this->Form->imput("name");
	echo $this->Form->label("last_name");
	echo $this->Form->imput("last_name");
	echo $this->Form->label("email");
	echo $this->Form->imput("email");
    echo $this->Form->label("age");
	echo $this->Form->imput("age");
    echo $this->Form->label("phone");
	echo $this->Form->imput("phone");
	echo $this->Form->label("address");
	echo $this->Form->imput("address");
	echo $this->Form->imput("id", array('type' => 'hidden'));
	echo $this->Form->end("Update");
?>