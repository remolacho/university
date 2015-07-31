<h1>Edit Student</h1>
<?php
	echo $this->Form->create("Student", array('action' => 'edit'));
	echo $this->Form->label("name");
	echo $this->Form->imput("name");
	echo $this->Form->label("last_name");
	echo $this->Form->imput("last_name");
	echo $this->Form->label("address");
	echo $this->Form->imput("address");
	echo $this->Form->imput("id", array('type' => 'hidden'));
	echo $this->Form->end("Update");
?>