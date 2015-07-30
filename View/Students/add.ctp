<h1>Add Student</h1>
<?php
  echo $this->Form->create("Student");
  echo $this->Form->label("name");
  echo $this->Form->imput("name");
  echo $this->Form->label("last_name");
  echo $this->Form->imput("last_name");
  echo $this->Form->label("address");
  echo $this->Form->imput("address");
  echo $this->Form->end("Save");
?>