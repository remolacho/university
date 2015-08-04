<h1><?php echo $this->Html->link("Teachers' List", array('action' => 'index')); ?> | Add Course</h1>
<p>
<?php echo $this->Form->label("ID: ".$teacher["Teacher"]["id"]); ?>
<?php echo $this->Form->label("DI: ".$teacher["Teacher"]["document_identity"]); ?>
<?php echo $this->Form->label("Name: ".$teacher["Teacher"]["name"]); ?>
<?php echo $this->Form->label("Last Name: ".$teacher["Teacher"]["last_name"]); ?>
<?php echo $this->Form->label("Phone: ".$teacher["Teacher"]["phone"]); ?>
<?php echo $this->Form->label("Address: ".$teacher["Teacher"]["address"]); ?>
</p>
<p>
  <?php echo $this->Form->label("CV:"); ?>
  <?php echo $teacher["Teacher"]["cv"]; ?>
</p>
<h1><?php echo $this->Html->link('Edit', array('action' => 'edit',$teacher['Teacher']['id']));?></h1>